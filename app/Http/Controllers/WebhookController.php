<?php

//now pipeline
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Laravel\Cashier\Cashier;
use Laravel\Cashier\Subscription;
use Stripe\Exception\SignatureVerificationException;
use Stripe\Stripe;
use Stripe\Webhook;
use Symfony\Component\HttpFoundation\Response;


class WebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $endpoint_secret = config('services.stripe.webhook_secret');

        // Retrieve the signature header
        $signature = $request->header('stripe-signature');

        // Get the payload from the request
        $payload = $request->getContent();
        Log::info('Request content: ' . json_encode($payload));


        try {
            $event = Webhook::constructEvent($payload, $signature, $endpoint_secret);
        } catch (SignatureVerificationException $e) {
            return response()->json(['error' => 'Invalid signature'], 400);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid payload'], 400);
        }

        switch ($event->type) {
            case 'customer.subscription.created':
                $this->handleSubscriptionCreated($event);
                break;
            case 'customer.subscription.deleted':
                $this->handleSubscriptionDeleted($event);
                break;
            case 'customer.subscription.updated':
                $this->handleSubscriptionUpdated($event);
                break;
            case 'customer.subscription.canceled':
                $this->handleSubscriptionCanceled($event);
                break;
            case 'invoice.payment_succeeded':
                $this->handleInvoicePaymentSucceeded($event);
                break;
            case 'invoice.payment_failed':
                $this->handleInvoicePaymentFailed($event);
                break;
            default:
                $this->handleUnhandledEvent($event);
                break;
        }
        return response()->json(['status' => 'success'], 200);
    }

    public function handleSubscriptionCreated($event)
    {
        $user = User::where('stripe_id', $event->data->object->customer)->first();

        if ($user) {
            $subscription = new Subscription();
            $subscription->user_id = $user->id;
            $subscription->name = $event->data->object->items->data[0]->price->nickname ?? 'default';
            $subscription->stripe_id = $event->data->object->id;
            $subscription->stripe_status = $event->data->object->status;
            $subscription->stripe_price = $event->data->object->items->data[0]->price->id ?? null;
            $subscription->quantity = $event->data->object->quantity;
            $subscription->trial_ends_at = $event->data->object->trial_end ? Carbon::createFromTimestamp($event->data->object->trial_end) : null;
            $subscription->ends_at = null;
            $subscription->save();
        }
    }



    public function handleSubscriptionDeleted($event)
    {
        $subscription = Subscription::where('stripe_id', $event->data->object->id)->first();

        if ($subscription) {
            $subscription->ends_at = Carbon::createFromTimestamp($event->data->object->ended_at);
            $subscription->stripe_status = $event->data->object->status;
            $subscription->save();
        }
    }

    public function handleSubscriptionUpdated($event)
    {
        $subscription = Subscription::where('stripe_id', $event->data->object->id)->first();

        if ($subscription) {
            $subscription->stripe_status = $event->data->object->status;
            $subscription->stripe_price = $event->data->object->items->data[0]->price->id ?? null;
            $subscription->quantity = $event->data->object->quantity;
            $subscription->trial_ends_at = $event->data->object->trial_end ? Carbon::createFromTimestamp($event->data->object->trial_end) : null;
            $subscription->ends_at = $event->data->object->cancel_at ? Carbon::createFromTimestamp($event->data->object->cancel_at) : null;
            $subscription->save();
        }
    }


    public function handleSubscriptionCanceled($event)
    {
        $subscription = Subscription::where('stripe_id', $event->data->object->id)->first();

        if ($subscription) {
            $subscription->ends_at = Carbon::createFromTimestamp($event->data->object->cancel_at);
            $subscription->stripe_status = $event->data->object->status;
            $subscription->save();
        }
    }

    public function handleInvoicePaymentSucceeded($event)
    {
        $user = User::where('stripe_id', $event->data->object->customer)->first();

        if ($user) {
            // You might want to record payment in a payments table or update the subscription's status
            $subscription = $user->subscriptions()->where('stripe_id', $event->data->object->subscription)->first();

            if ($subscription) {
                // Optionally, update the subscription status
                $subscription->stripe_status = 'active';
                $subscription->save();
            }

            // Log or notify about the payment success
            Log::info('Payment succeeded for user: ' . $user->id);
        }
    }

    public function handleInvoicePaymentFailed($event)
    {
        $user = User::where('stripe_id', $event->data->object->customer)->first();

        if ($user) {
            $subscription = $user->subscriptions()->where('stripe_id', $event->data->object->subscription)->first();

            if ($subscription) {
                // Optionally, update the subscription status
                $subscription->stripe_status = 'past_due';
                $subscription->save();
            }

            // Log or notify about the payment failure
            Log::error('Payment failed for user: ' . $user->id);
        }
    }

    public function handleUnhandledEvent($event)
    {
        Log::info('Unhandled webhook event: ' . $event->type);
    }


    protected function getUserIdFromStripeCustomerId($stripeCustomerId)
    {
        $user = User::where('stripe_id', $stripeCustomerId)->first();
        return $user ? $user->id : null;
    }
}

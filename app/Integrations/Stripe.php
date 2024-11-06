<?php
namespace App\Integrations;
use App\Interface\BillableInterface;
use App\Models\Subscription;
use Stripe\Exception\ApiErrorException;
use Stripe\StripeClient;

class Stripe implements BillableInterface
{
    public function checkout(Subscription $subscription): string
    {
        $customerData = ['email' => $subscription->email];

        // Check if a Stripe customer with the email exists, otherwise create one
        $customers = (new StripeClient(config('services.stripe.secret')))->customers;

        $customerId = ! $customers->all($customerData)->count()
            ? $customers->create($customerData)->id
            : $customers->all($customerData)->first()->id;

        // Obtain a client_secret from the customer's PaymentIntent
        // dd(config('services.stripe.secret'));
        $paymentIntent = (new StripeClient(config('services.stripe.secret')))
            ->paymentIntents
            ->create([
                'customer' => $customerId,
                'setup_future_usage' => 'off_session',
                'amount' => 100 * config('services.stripe.currency_smallest_unit'),
                'currency' => config('services.stripe.currency'),
                'metadata' => [
                    'order_id' => $subscription->id,
                ],
                'payment_method_types' => [
                    'card',
                ],
                'description' => 'Pament for Test',//. $subscription->products->first()->name,
            ]);

        return $paymentIntent->client_secret;
    }
}

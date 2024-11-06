<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\User;
use Laravel\Cashier\Exceptions\PaymentActionRequired;
use Stripe\Price;
use Stripe\Product;
use Stripe\Stripe;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the subscriptions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = Subscription::all();
        return response()->json($subscriptions);
    }

    /**
     * Store a newly created subscription in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'package' => 'required|string|max:255',
            'price' => 'nullable|numeric',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'notes' => 'nullable|string',
            'status' => 'required|string|max:255',
            'company_id' => 'nullable|exists:companies,id',

        ]);

        $subscription = Subscription::create($validated);
        return response()->json($subscription, 201);
    }

    /**
     * Display the specified subscription.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        return response()->json($subscription);
    }

    /**
     * Update the specified subscription in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        $validated = $request->validate([
            'package' => 'required|string|max:255',
            'price' => 'nullable|numeric',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'notes' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        $subscription->update($validated);
        return response()->json($subscription);
    }

    /**
     * Remove the specified subscription from storage (soft delete).
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return response()->json(['message' => 'Subscription deleted successfully.']);
    }

    /**
     * Restore the specified soft-deleted subscription.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $subscription = Subscription::withTrashed()->find($id);
        if ($subscription && $subscription->trashed()) {
            $subscription->restore();
            return response()->json(['message' => 'Subscription restored successfully.']);
        }

        return response()->json(['message' => 'Subscription not found or not deleted.'], 404);
    }
    

    public function showSubscriptionForm()
    {
        // $user = User::first();
        // Auth::login($user);
        // dd(auth()->user());
        $intent = auth()->user()->createSetupIntent();
        return view('subscription', compact('intent'));
    }

    public function createSubscription(Request $request)
    {
        $user = $request->user();
        $priceId = $this->getOrCreateProductAndPrice();

        try {
            $user->newSubscription('default', $priceId)
                ->create($request->paymentMethodId, [
                    'email' => $user->email,
                ]);
        } catch (PaymentActionRequired $e) {
            return redirect()->route('billing.payment', [$e->payment->id]);
        }

        return redirect()->route('home')->with('success', 'Subscription created successfully!');
    }

    public function addPaymentMethod(Request $request)
    {
        $request->user()->updateDefaultPaymentMethod($request->paymentMethodId);

        return back()->with('success', 'Payment method added successfully!');
    }

    public function confirmPayment($paymentId)
    {
        $payment = auth()->user()->findPayment($paymentId);

        if ($payment->requiresAction()) {
            return $payment->confirm();
        }

        return redirect()->route('home')->with('success', 'Payment confirmed!');
    }

    public function getOrCreateProductAndPrice()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        // Define product details
        $productName = 'Premium Subscription';
        $priceAmount = 1000; // Amount in cents (e.g., 1000 = $10.00)
        $currency = 'usd';
        $interval = 'month';

        // Check if the product already exists
        $existingProducts = Product::all(['limit' => 100])->data;
        $product = null;

        foreach ($existingProducts as $prod) {
            if ($prod->name === $productName) {
                $product = $prod;
                break;
            }
        }

        if (!$product) {
            // Create the product if it doesn't exist
            $product = Product::create([
                'name' => $productName,
                'description' => 'Monthly subscription to premium features',
            ]);
        }

        // Check if the price already exists
        $existingPrices = Price::all([
            'product' => $product->id,
            'limit' => 100
        ])->data;

        $price = null;
        foreach ($existingPrices as $pr) {
            if ($pr->unit_amount === $priceAmount && $pr->currency === $currency && $pr->recurring->interval === $interval) {
                $price = $pr;
                break;
            }
        }

        if (!$price) {
            // Create the price if it doesn't exist
            $price = Price::create([
                'product' => $product->id,
                'unit_amount' => $priceAmount,
                'currency' => $currency,
                'recurring' => ['interval' => $interval],
            ]);
        }

        return $price->id;
    }
}

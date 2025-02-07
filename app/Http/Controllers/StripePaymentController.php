<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Stripe;

class StripePaymentController extends Controller
{
    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function subscribe()

    {

        return view('stripe');

    }



    /**
 * success response method.
 *

     * @return \Illuminate\Http\RedirectResponse
     */

    public function stripePost(Request $request)

    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment fro"
        ]);
        Session::flash('success', 'Payment successful!');
        return redirect()->route('services');
    }
}

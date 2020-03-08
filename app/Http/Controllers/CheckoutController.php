<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout', [
            'title' => 'Checkout'
        ]);
    }


    public function stripe_charge(Request $request)
    {
        Stripe::setApiKey('sk_test_tAIEd0s6d0UNM854JNW2XUey00Xbo2ne8T');

        $intent = PaymentIntent::create([
            'amount' => 1099,
            'currency' => 'usd',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);
    }
}

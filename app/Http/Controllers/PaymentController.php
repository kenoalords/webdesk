<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Model\User;
use App\Model\Payment;
use App\Model\Invoice;
use App\Model\Subscription;
use App\Http\Requests;
use App\Mail\PaymentNotification;
use App\Http\Controllers\Controller;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback(Request $request)
    {
        $payment = Paystack::getPaymentData();
        // dd($payment);
        // Successful Payment
        if ( $payment['status'] === true ) {
            $invoice = Invoice::find($payment['data']['metadata']['invoice_id']);
            $ID = (int)$payment['data']['metadata']['invoice_id'];
            $amount_paid = $payment['data']['amount'];
            $amount_payable = (int)$invoice->amount * 100;
            $amount_difference = $amount_payable - $amount_paid;

            $paystack_id = $payment['data']['id'];
            $paystack_reference = $payment['data']['reference'];

            $payment = $request->user()->payment()->create([
                'invoice_id'        => $invoice->id,
                'amount_paid'       => $amount_paid / 100,
                'amount_due'        => $invoice->amount,
                'medium'            => 'Paystack',
                'amount_difference' => $amount_difference,
                'paystack_id'       => $payment['data']['id'],
                'paystack_reference'=> $payment['data']['reference'],
                'paystack_fees'     => $payment['data']['fees']/100,
                'paystack_customer_code'    => $payment['data']['customer']['customer_code'],
                'authorization_code'=> $payment['data']['authorization']['authorization_code'],
                'bin'               => $payment['data']['authorization']['bin'],
                'signature'         => $payment['data']['authorization']['signature'],
                'last4'             => $payment['data']['authorization']['last4'],
                'card_type'         => $payment['data']['authorization']['card_type'],
                'bank'              => $payment['data']['authorization']['bank'],
                'country_code'      => $payment['data']['authorization']['country_code'],
                'brand'             => $payment['data']['authorization']['brand'],
                'ip'                => $payment['data']['ip_address']
            ]);
            $invoice->is_paid = true;
            $invoice->save();

            $subscription = Subscription::find($invoice->subscription_id);
            $subscription->is_active = true;
            $subscription->progress = 5;
            $subscription->progress_description = "Payment received! We will commence as soon as we verify your details";
            switch ($subscription->renew_interval) {
                case 1:
                    $subscription->expires = $subscription->expires->addDays(30);
                    break;
                case 6:
                    $subscription->expires = $subscription->expires->addDays(30*6);
                    break;
                case 12:
                    $subscription->expires = $subscription->expires->addYear();
                    break;
                default:
                    break;
            }
            $subscription->save();

            Mail::to($request->user())->bcc(config('app.email'))->send(new PaymentNotification($ID, $paystack_id, $paystack_reference, $amount_paid));

            return redirect()->route('show_receipt', ['invoice' => $invoice->id]);
        }
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function approveInvoice(Request $request, Invoice $invoice)
    {
        if ( $request->user()->is_admin === 0 ){
            return response()->json(false, 422);
        }
        $user = User::find($invoice->user_id);
        $payment = $user->payment()->create([
            'invoice_id'        => $invoice->id,
            'amount_paid'       => $invoice->amount,
            'amount_due'        => $invoice->amount,
            'medium'            => 'Bank payment',
            'approved_by'       => $request->user()->fullname,
        ]);
        $invoice->is_paid = true;
        $invoice->save();

        $subscription = Subscription::find($invoice->subscription_id);
        $subscription->is_active = true;
        
        // Run a check to determine if the invoice is new
        // Or for a recurring payment
        $subscription->progress = 5;
        $subscription->progress_description = "Payment received! We will commence as soon as we verify your details";
        switch ($subscription->renew_interval) {
            case 1:
                $subscription->expires = $subscription->expires->addDays(30);
                break;
            case 6:
                $subscription->expires = $subscription->expires->addDays(30*6);
                break;
            case 12:
                $subscription->expires = $subscription->expires->addYear();
                break;
            default:
                break;
        }
        $subscription->save();
        return response()->json(true, 200);
    }
}
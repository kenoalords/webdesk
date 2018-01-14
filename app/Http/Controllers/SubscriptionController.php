<?php

namespace App\Http\Controllers;

use Mail;
use App\Model\Subscription;
use App\Model\Package;
use App\Http\Requests\AddSubscriptionRequest;
use App\Transformers\SubscriptionTransformer;
use App\Mail\SubscriptionNotification;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    	public function __construct()
    	{
    		$this->middleware('auth');
    	}

    	public function showSubscriptions(Request $request)
    	{
    		$subscriptions = $request->user()->subscription()->get();
    		$subscriptions = fractal()->collection($subscriptions)
                                ->transformWith(new SubscriptionTransformer())
                                ->toArray();
            // dd($subscriptions);
    		return view('subscription.subscriptions')->with('subscriptions', $subscriptions);
    	}

    	public function add(Request $request)
    	{
    		return view('subscription.add');
    	}

    	public function submit(AddSubscriptionRequest $r, Package $p)
    	{
    		$package = $p->find($r->package);
    		$description = '<p>' . $package->name . ' @ <span class="naira">' . number_format($package->setup_cost).'</span></p>';
    		$total = $package->setup_cost;

    		if ( $r->include_logo == "1" ){
    			$total += config('builder.logo_cost');
    			$description .= '<p>Logo design @ <span class="naira">'.number_format(config('builder.logo_cost')).'</span></p>';
    		}
    		// Store the subscription
    		$subscription = $r->user()->subscription()->create([
    			'package_id'	=> $r->package,
    			'has_domain'	=> ($r->has_domain) ? $r->has_domain : 0,
                'domain_name'   => $r->domain,
    			'notes'	        => $r->notes,
    			'include_logo'	=> ($r->include_logo) ? $r->include_logo : 0,
    		]);

    		// Generate the invoice
    		$invoice = $r->user()->invoice()->create([
    			'package_id'    => $package->id,
    			'subscription_id'   => $subscription->id,
    			'amount'        => $total,
    			'uid'           => uniqid(true),
    			'description'   => $description,
    		]);
    		if( $invoice ) {
                // Send email notification
                Mail::to($r->user())->bcc(config('app.email'))->send(new SubscriptionNotification($invoice->id));
    			return redirect()->route('show_invoice', ['invoice' => $invoice->id]);
    		}
    	}
}

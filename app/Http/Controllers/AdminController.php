<?php

namespace App\Http\Controllers;

use Mail;
use App\Model\Subscription;
use App\Model\Invoice;
use App\Model\User;
use Illuminate\Http\Request;
use App\Traits\Orderable;
use App\Transformers\SubscriptionTransformer;
use App\Transformers\InvoiceTransformer;
use App\Mail\SubscriptionUpdateNotification;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class AdminController extends Controller
{
	use Orderable;

	public function __construct()
	{
		$this->middleware(['auth', 'admin']);
	}

	// Get all subscription
	public function subscriptions(Request $request, Subscription $subscription)
	{
		$subscriptions = fractal()->collection($subscription->latestFirst()->get())
							->transformWith(new SubscriptionTransformer())
							->toArray();
		return view('admin.subscriptions')->with('subscriptions', $subscriptions);
	}

	// Get all invoices
	public function invoices(Request $request, Invoice $invoice)
	{
		$unpaid_invoices = fractal()->collection($invoice->unPaidInvoices()->latestFirst()->get())
						->transformWith(new InvoiceTransformer())
						->toArray();
		$paid_invoices = fractal()->collection($invoice->paidInvoices()->latestFirst()->get())
						->transformWith(new InvoiceTransformer())
						->toArray();
		// dd($invoices);
		return view('admin.invoices')->with([
			'unpaid_invoices' 	=> $unpaid_invoices,
			'paid_invoices' 	=> $paid_invoices,
		]);
	}

	public function updateSubscription(Request $request, Subscription $sub, User $user)
	{
		$subscription = $sub->find($request->id);
		$subscription->progress = (int)$request->percentage;
		$subscription->progress_description = $request->message;
		$subscription->save();
		$user = $user->find($subscription->user_id);
		Mail::to($user)->send(new SubscriptionUpdateNotification($subscription->id));
		return response()->json(true, 200);
	}

	public function manageSubscription(Request $request, Subscription $subscription)
	{
		$sub = $subscription->find($request->id);
		$domain = $sub->domain_name;
		if ( (bool)$request->active ===  false ){
			$sub->is_active = 1;
			$sub->save();
			$api_route = $domain . '/wp-json/webdesk/v1/subscription/activate';
			return response()->json([ 'route' => $api_route, 'isActive' => 1, 'accessToken' => $sub->access_token ], 200);
		} else {
			$sub->is_active = 0;
			$sub->save();
			$api_route = $domain . '/wp-json/webdesk/v1/subscription/deactivate';
			return response()->json([ 'route' => $api_route, 'isActive' => 0, 'accessToken' => $sub->access_token ], 200);
		}	
		return response()->json(false, 422);	
	}
}







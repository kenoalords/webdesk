<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactSubmitNotification;
use App\Transformers\SubscriptionTransformer;
use Illuminate\Http\Request;

class SupportController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function contact(Request $req)
	{
		$subscriptions = fractal()->collection($req->user()->subscription()->get())->transformWith(new SubscriptionTransformer())->toArray();
		return view('support.contact')->with('subscriptions', $subscriptions);
	}

	// Post the contact request
	public function submitContact(Request $request)
	{
		// dd($request);
		$request->validate([
			'subject' => 'required',
			'message'	=> 'required',
		]);

		$submit = $request->user()->contact()->create([
				'subscription_id'	=> $request->subscription_id,
				'department'	=> $request->department,
				'subject'		=> $request->subject,
				'message'		=> $request->message,
			]);
		if($submit){
			Mail::to(config('app.email.support'))->send(new ContactSubmitNotification($request->subscription_id, $request->department, $request->subject, $request->message));
			$request->session()->flash('status', 'Your contact enquiry was submitted successfully!');
			return redirect()->route('admin_contact');
		}
	}

	public function faq(Request $req)
	{
		return view('support.faq');
	}
}

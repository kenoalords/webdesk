<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactFormNotification;
use App\Mail\ContactFormNotificationResponse;
use App\Mail\BannedIpNotification;
use App\Model\ContactForm;
use App\Model\BannedIp;
use Illuminate\Http\Request;

class ContactController extends Controller
{ 
	public function getForm(Request $request)
	{
		return view('contact.form');
	}

	public function submitForm(Request $request, ContactForm $contact, BannedIp $banned_ip)
	{
		$ip_check = $banned_ip->where('ip', $request->ip())->get();
		if ( $ip_check->count() > 0 ){
			Mail::to(config('app.email.support'))->send(new BannedIpNotification($request->ip()));
			return redirect('/');
		}
		$request->validate([
			'fullname'	=> 'required|string',
			'email'		=> 'required|email',
			'message'		=> 'required|string'
		]);

		if($request->url != ""){
			die('Oops! something is not right');
		}

		$contact->create([
			'fullname'	=> $request->fullname,
			'email'		=> $request->email,
			'subject'		=> $request->subject,
			'contact_number'	=> $request->contact_number,
			'message'		=> $request->message,
			'ip'			=> $request->ip(),
		]);
		Mail::to(config('app.email.contact'))->send(new ContactFormNotification($request->fullname, $request->email, $request->contact_number, $request->subject, $request->message));
		Mail::to($request->email)->send(new ContactFormNotificationResponse($request->fullname));
		$request->session()->flash('status', 'Received! We typically respond within 12 hours.');
		return redirect()->route('contact_form');
	}
}

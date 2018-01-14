<?php

namespace App\Http\Controllers;

use Mail;
use App\Model\User;
use App\Mail\PasswordChangeNotification;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function edit(Request $request)
	{
		return view('profile.edit')->with('user', $request->user());
	}

	public function submitEdit(Request $req)
	{
		$req->validate([
			'email'	=> 'required|string|email',
			'fullname'=> 'required|string',
			'city'	=> 'required|string',
			'state'	=> 'required|string',
			'phone_number'	=> 'required',
		]);

		$user = $req->user();
		$user->email = $req->email;
		$user->fullname = $req->fullname;
		$user->city = $req->city;
		$user->state = $req->state;
		$user->phone_number = $req->phone_number;
		$user->save();

		if($req->password){
			$req->validate([
				'password' => 'required|string|min:6|confirmed'
			]);
			$user->password = bcrypt($req->password);
			$user->save();
			Mail::to($user)->send(new PasswordChangeNotification($user->id));
		}
		
		$req->session()->flash('status', 'Profile saved successfully');
		return redirect()->route('edit_profile');
	}
}

<?php

namespace App\Http\Controllers;

use App\Model\BannedIp;
use App\Model\ContactForm;
use Illuminate\Http\Request;

class BannedIpController extends Controller
{
	public function index()
	{
		$contacts = ContactForm::latestFirst()->get();
		return view('contact.admin')->with('contacts', $contacts);
	}

	public function getBannedStatus(Request $req)
	{
		$is_banned = BannedIp::where('ip', $req->ip)->get();
		return response()->json($is_banned->count() > 0, 200);
	}

	public function banIP(Request $req, BannedIp $ban_ip)
	{
		$ip = $ban_ip->create([
			'ip'	=> $req->ip
		]);
		if($ip){
			return response()->json(true, 200);
		} else {
			return response()->json(false, 422);
		}
	}
}

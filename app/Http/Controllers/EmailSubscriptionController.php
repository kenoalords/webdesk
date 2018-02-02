<?php

namespace App\Http\Controllers;

use App\Model\EmailSubscription;
use Illuminate\Http\Request;

class EmailSubscriptionController extends Controller
{
    public function subscribe(Request $request, EmailSubscription $emailSubcription)
    {
    		$this->validate($request, [
    			'email' => 'required|email',
    		]);
    		$check = $emailSubcription->where('email', $request->email)->get();
    		if ( $check->count() > 0 ){
    			return response()->json(true, 200);
    		}
    		$ip = geoip()->getLocation($request->ip());
    		$subscribe = $emailSubcription->create([
    					'email'	=> strtolower($request->email),
    					'ip'	=> $request->ip(),
    					'city'	=> $ip->city,
    					'state'	=> $ip->state_name,
    					'country'=> $ip->country,
    					'iso_code'=> $ip->iso_code,
    				]);
    		if($subscribe){
    			return response()->json(true, 200);
    		}
    }
}

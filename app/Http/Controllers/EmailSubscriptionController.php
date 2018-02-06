<?php

namespace App\Http\Controllers;

use App\Model\EmailSubscription;
use Illuminate\Http\Request;

class EmailSubscriptionController extends Controller
{
    public function subscribe(Request $request, EmailSubscription $emailSubcription)
    {
        // dd($request);
    		$this->validate($request, [
                'email' => 'required|email',
                'fullname' => 'required',
    			'website' => 'required',
    		]);
    		$check = $emailSubcription->where('email', $request->email)->first();

    		if ( $check->count() > 0 ) {
                if( $request->ajax() )
                    return response()->json(true, 200);
                else
                    return redirect()->route('audit_initiated', [ 'status' => 'old', 'url' => $check->website ]);
    		}

    		$ip = geoip($request->ip());
    		$subscribe = $emailSubcription->create([
                        'email'    => strtolower($request->email),
                        'fullname' => strtolower($request->fullname),
    					'website'  => strtolower($request->website),
    					'ip'	   => $request->ip(),
    					'city'     => $ip->city,
    					'state'	   => $ip->state_name,
    					'country'  => $ip->country,
    					'iso_code' => $ip->iso_code,
    				]);
    		if($subscribe){
                if( $request->ajax() ){
                    return response()->json(true, 200);
                }
    			 return redirect()->route('audit_initiated', [ 'status' => 'new', 'url' => $subscribe->website ]);    
    		}
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\Subscription;
use Illuminate\Http\Request;

class WebdeskApiController extends Controller
{
	/*
	*	Check subscription status
	*/
	public function subcriptionStatus(Request $request, Subscription $subscription)
	{
		// var_dump();
		if( $request->header('webdesk-access-token') !== $subscription->access_token ){
			return response()->json(['status'=>0, 'message'=>'Authorization failed'], 401);
		}
		return response()->json($subscription->expires, 200);
	}
}

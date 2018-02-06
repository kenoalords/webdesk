<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function homepage()
    {
    		return view('index');
    }

    public function aboutPage()
    {
    		return view('about');
    }

    public function pricingPage()
    {
    		return view('pricing');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function audit()
    {
        return view('audit');
    }

    public function auditInitiated(Request $request)
    {
        // dd($request->get('status'));
        if( !$request->get('status') || !in_array($request->get('status'), ['old', 'new']) ){
            return redirect()->route('audit');
        }
        return view('audit_initiated');
    }
}

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

}

<?php

namespace App\Http\Controllers;

use App\Model\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
	public function faqAdmin(Request $request)
	{
		$faqs = Faq::get();
		return view('faq.admin')->with('faqs', $faqs);
	}

	public function submitFAQ(Request $request)
	{
		$request->validate([
			'title'		=> 'required|string',
			'description'	=> 'required|string',
		]);

		$faq = Faq::create([
			'title'		=> $request->title,
			'description'	=> $request->description,
			'weight'		=> $request->weight
		]);

		if($faq){
			$request->session()->flash('status', 'FAQ stored successfully!');
			return redirect()->route('faq_admin');
		}
	}
}

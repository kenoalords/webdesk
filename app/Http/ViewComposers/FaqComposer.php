<?php

namespace App\Http\ViewComposers;

use Auth;
use App\Model\Faq;
use Illuminate\View\View;

class FaqComposer {

	public function compose( View $view )
	{
		$faqs = Faq::orderBy('weight', 'asc')->get();
		$view->with('faqs', $faqs);
	}

}
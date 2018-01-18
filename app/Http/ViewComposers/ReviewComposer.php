<?php

namespace App\Http\ViewComposers;

use Auth;
use App\Model\Review;
use Illuminate\View\View;

class ReviewComposer {

	public function compose( View $view )
	{
		$reviews = Review::all();
		$view->with('reviews', $reviews);
	}

}
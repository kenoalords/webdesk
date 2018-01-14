<?php

namespace App\Http\ViewComposers;

use Auth;
use App\Model\User;
use Illuminate\View\View;

class AdminHeaderComposer {

	public function compose( View $view )
	{
		$fullname = Auth::user()->fullname;
		$view->with('fullname', $fullname);
	}

}
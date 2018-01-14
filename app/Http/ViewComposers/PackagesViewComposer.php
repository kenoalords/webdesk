<?php

namespace App\Http\ViewComposers;

use Auth;
use App\Model\Package;
use Illuminate\View\View;

class PackagesViewComposer {

	public function compose( View $view )
	{
		$packages = Package::all();
		$view->with('packages', $packages);
	}

}
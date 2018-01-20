<?php

namespace App\Http\ViewComposers;

use Auth;
use App\Model\User;
use Illuminate\View\View;

class UsersComposer {

	public function compose( View $view )
	{
		$users = User::all();
		$view->with('users', $users);
	}

}
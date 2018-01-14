<?php

namespace App\Http\Controllers;

use App\Model\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
	public function getPackage(Request $request, Package $package)
	{
		if( !$request->ajax() ) return;
		return response()->json($package, 200);
	}
}

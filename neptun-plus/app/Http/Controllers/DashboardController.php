<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
	public function dashboard()
	{
		$user = Auth::user()->load('role');

		$additionalData = [
			'user' => $user,
		];

		return view('dashboard')->with($additionalData);
	}
}

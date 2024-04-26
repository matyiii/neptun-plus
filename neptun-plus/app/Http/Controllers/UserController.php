<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function courses()
	{
		$user = Auth::user()->load(['role', 'grades', 'courses', 'courses.subject', 'attendances']);

		$additionalData = [
			'user' => $user,
		];

		return view('courses')->with($additionalData);
	}
}

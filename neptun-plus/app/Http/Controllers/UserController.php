<?php

namespace App\Http\Controllers;

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

	public function listClasses()
	{
		$user = Auth::user()->load(['role', 'courses', 'courses.classes', 'courses.subject', 'courses.users', 'attendances']);

		$additionalData = [
			'courses' => $user->courses
		];

		return view('attendance.management')->with($additionalData);
	}
}

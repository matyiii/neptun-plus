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

	public function listClasses()
	{
		$user = Auth::user()->load(['role', 'courses', 'courses.classes', 'courses.subject', 'courses.users', 'attendances']);

		$additionalData = [
			'courses' => $user->courses
		];

		return view('attendance.management')->with($additionalData);
	}

	public function schedule()
	{
		$user = Auth::user()->load([
			'role',
			'courses',
			'courses.subject',
			'courses.classes',
			'courses.classes.attendances',
			'attendances'
		]);

		$sortedClasses = $user->courses->flatMap(function ($course) use ($user) {
			return $course->classes->map(function ($class) use ($course, $user) {
				$class->attendance = $class->attendances->first(fn ($att) => $att->user_id === $user->id);
				$class->subject = $course->subject;
				return $class;
			});
		})->sortByDesc('class_date');

		$additionalData = [
			'user' => $user,
			'sortedClasses' => $sortedClasses
		];

		return view('schedule')->with($additionalData);
	}
}

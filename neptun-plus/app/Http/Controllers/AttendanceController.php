<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
	public function showManageForm($courseId)
	{
		$students = User::getStudentByCourseId($courseId);

		$data = [
			'courseId' => $courseId,
			'students' => $students,
		];

		return view('attendance.form')->with($data);
	}

	public function submit(Request $request)
	{
		//TODO
		dd($request);
	}
}

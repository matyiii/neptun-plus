<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\CourseClass;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
	public function showManageForm($classId)
	{
		$students = User::getStudentByClassId($classId);
		$subject = Subject::getSubjectByClassId($classId);
		$classDate = CourseClass::getClassDate($classId);

		$data = [
			'classId' => $classId,
			'classDate' => $classDate,
			'subject' => $subject,
			'students' => $students,
		];

		return view('attendance.form')->with($data);
	}

	public function submit(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'class_id' => 'exists:App\Models\CourseClass,id',
			'students' => 'required|array',
			'students.*' => 'required|in:0,1',
			'justified_absences' => 'array', 
		]);
	
		$validated = $validator->validate();
		$classId = $validated['class_id'];
		$students = $validated['students'];
		$justifiedAbsences = $request->input('justified_absences'); 
	
		Attendance::updateAttendances($classId, $students, $justifiedAbsences);
	
		return redirect()->back()->with('success', 'Jelenlét sikeresen rögzítve!');
	}
}

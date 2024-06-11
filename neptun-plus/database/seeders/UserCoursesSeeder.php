<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCoursesSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$students = User::getStudents();
		$teachers = User::getTeachers();
		$courses = Course::all();

		foreach ($students as $student) {
			$randomCourses = $courses->random(rand(1, 3));
			$student->courses()->attach($randomCourses);
		}

		foreach ($teachers as $teacher) {
			$randomCourses = $courses->random(rand(4, 6));
			$teacher->courses()->attach($randomCourses);
		}
	}
}

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
		$users = User::getStudents();
		$courses = Course::all();

		foreach ($users as $user) {
			$randomCourses = $courses->random(rand(1, 3));
			$user->courses()->attach($randomCourses);
		}
	}
}

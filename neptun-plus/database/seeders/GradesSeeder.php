<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::getStudents();
        $courses = Course::all();

        foreach ($courses as $course) {
            foreach ($users as $user) {
                $grade = rand(1, 5);
                Grade::create([
                    'user_id' => $user->id,
                    'course_id' => $course->id,
                    'grade' => $grade,
                ]);
            }
        }
    }
}

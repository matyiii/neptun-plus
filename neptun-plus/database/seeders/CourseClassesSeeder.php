<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            $startDate = now();
            $endDate = now()->addWeeks(2);

            for ($i = 1; $i <= 2; $i++) {
                CourseClass::create([
                    'course_id' => $course->id,
                    'class_date' => $startDate,
                ]);

                $startDate = $endDate->addDay();
                $endDate = $startDate->addWeeks(2);
            }
        }
    }
}

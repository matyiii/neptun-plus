<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['subject_code' => 'LBT_IM730G3', 'code' => 'A'],
            ['subject_code' => 'LBT_IM730G3', 'code' => 'B'],
            ['subject_code' => 'LBT_IM717G2', 'code' => 'A'],
            ['subject_code' => 'LBT_IM717G2', 'code' => 'B'],
            ['subject_code' => 'LBT_IM717G2', 'code' => 'C'],
            ['subject_code' => 'LBT_IM716K3', 'code' => 'A'],
            ['subject_code' => 'LBT_IM742M1', 'code' => 'A'],
            ['subject_code' => 'LBT_IM742P2', 'code' => 'A'],
            ['subject_code' => 'LBT_IM742P2', 'code' => 'B'],
        ];

        foreach ($courses as $course) {
            $subject = Subject::where('code', $course['subject_code'])->first();
            Course::create([
                'subject_id' => $subject->id,
                'code' => $course['code'],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\CourseClass;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::getStudents();
        $classes = CourseClass::all();

        foreach ($classes as $class) {
            foreach ($users as $user) {
                $present = rand(0, 1);
                $excuseSubmitted = $present ? rand(0, 1) : false;
                Attendance::create([
                    'user_id' => $user->id,
                    'class_id' => $class->id,
                    'present' => $present,
                    'excuse_submitted' => $excuseSubmitted,
                ]);
            }
        }
    }
}

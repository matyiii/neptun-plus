<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'name' => 'Kalkulus I.',
                'code' => 'LBT_IM730G3',
                'type' => 'gy'
            ],
            [
                'name' => 'Adatbázisrendszerek I.',
                'code' => 'LBT_IM717G2',
                'type' => 'gy',
            ],
            [
                'name' => 'Adatbázisrendszerek I.',
                'code' => 'LBT_IM716K3',
                'type' => 'ea',
            ],
			[
                'name' => 'Robotika',
                'code' => 'LBT_IM742M1',
                'type' => 'ea',
            ],
			[
                'name' => 'Robotika',
                'code' => 'LBT_IM742P2',
                'type' => 'gy',
            ],
        ];

        foreach ($subjects as $subject) {
            Subject::create([
                'name' => $subject['name'],
                'code' => $subject['code'],
                'type' => $subject['type'],
            ]);
        }
    }
}

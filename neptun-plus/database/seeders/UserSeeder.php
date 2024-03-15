<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$users = [
			[
				'neptun_code' => 'admin',
				'role_id' => 1,
				'email' => 'admin@admin.com',
				'password' => 'admin123'
			],
			[
				'neptun_code' => 'abc123',
				'role_id' => 2,
				'email' => 'teszt@teszt.com',
				'password' => 'admin123'
			]
		];

		foreach ($users as $user) {
			User::create([
				'neptun_code' => $user['neptun_code'],
				'role_id' => $user['role_id'],
				'email' => $user['email'],
				'password' => Hash::make($user['password'])
			]);
		}
	}
}

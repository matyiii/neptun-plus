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
				'password' => 'password'
			],
			[
				'neptun_code' => 'D5XZES',
				'role_id' => 2,
				'email' => 'D5XZES@teszt.com',
				'password' => 'password'
			],
			[
				'neptun_code' => 'A3RS1C',
				'role_id' => 2,
				'email' => 'A3RS1C@teszt.com',
				'password' => 'password'
			],
			[
				'neptun_code' => 'GH4MN2',
				'role_id' => 2,
				'email' => 'GH4MN2@teszt.com',
				'password' => 'password'
			],
			[
				'neptun_code' => 'MS3TK1',
				'role_id' => 1,
				'email' => 'MS3TK1@teszt.com',
				'password' => 'password'
			],
			[
				'neptun_code' => 'FML1SQ',
				'role_id' => 2,
				'email' => 'FML1SQ@teszt.com',
				'password' => 'password'
			],
			[
				'neptun_code' => 'SC1MN2',
				'role_id' => 2,
				'email' => 'SC1MN2@teszt.com',
				'password' => 'password'
			],
			[
				'neptun_code' => 'PL3NN7',
				'role_id' => 2,
				'email' => 'PL3NN7@teszt.com',
				'password' => 'password'
			],
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

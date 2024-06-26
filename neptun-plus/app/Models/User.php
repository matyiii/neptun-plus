<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
	use HasFactory, Notifiable;

	protected $fillable = [
		'neptun_code',
		'role_id',
		'email',
		'password',
	];

	protected $hidden = [
		'password',
	];

	protected function casts(): array
	{
		return [
			'password' => 'hashed',
		];
	}

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function grades()
	{
		return $this->hasMany(Grade::class);
	}

	public function courses()
	{
		return $this->belongsToMany(Course::class, 'user_courses');
	}

	public function attendances()
	{
		return $this->hasMany(Attendance::class);
	}

	public static function getStudents()
	{
		return self::whereHas('role', function ($query) {
			$query->where('id', 2);
		})->get();
	}

	public static function getStudentByCourseId($courseId)
	{
		return self::with(['attendances'])
			->whereHas('courses', function ($query) use ($courseId) {
				$query->where('courses.id', $courseId);
			})->get();
	}

	public static function getStudentByClassId($classId)
	{
		return self::with(['attendances'])
			->whereHas('courses', function ($query) use ($classId) {
				$query->whereHas('classes', function ($query) use ($classId) {
					$query->where('id', $classId);
				});
			})
			->whereHas('role', function ($query) {
				$query->where('id', 2);
			})->get();
	}

	public static function getTeachers()
	{
		return self::whereHas('role', function ($query) {
			$query->where('id', 1);
		})->get();
	}

	public function hasRole($role)
	{
		$roleId = $role === 'teacher' ? 1 : 2;

		return $this->role->id === $roleId;
	}
}

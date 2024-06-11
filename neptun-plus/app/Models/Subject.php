<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	use HasFactory;

	protected $connection = 'mysql';
	protected $table = 'subjects';

	protected $fillable = [
		'name',
		'code',
		'type',
	];

	public function courses()
	{
		return $this->hasMany(Course::class);
	}

	public static function getSubjectByCourseId($courseId)
	{
		return self::whereHas('courses', function ($query) use ($courseId) {
			$query->where('courses.id', $courseId);
		})->first();
	}

	public static function getSubjectByClassId($classId)
	{
		return self::whereHas('courses', function ($query) use ($classId) {
			$query->whereHas('classes', function ($query) use ($classId) {
				$query->where('id', $classId);
			});
		})->first();
	}
}

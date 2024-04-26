<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseClass extends Model
{
	use HasFactory;

	protected $connection = 'mysql';
	protected $table = 'course_classes';

	protected $fillable = [
		'course_id',
		'class_date'
	];

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function attendances()
	{
		return $this->hasMany(Attendance::class);
	}

	public static function getClassDate($classId)
	{
		return self::find($classId)->class_date;
	}
}

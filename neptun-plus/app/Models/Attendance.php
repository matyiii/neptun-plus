<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
	use HasFactory;

	protected $connection = 'mysql';
	protected $table = 'attendances';

	protected $fillable = [
		'user_id',
		'class_id',
		'present',
		'excuse_submitted'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function class()
	{
		return $this->belongsTo(CourseClass::class);
	}

	public static function updateAttendances($classId, $students, $justifiedAbsences)
	{
		foreach ($students as $userId => $present) {
			$excuseSubmitted = isset($justifiedAbsences[$userId]) ? $justifiedAbsences[$userId] : 0;
	
			self::updateOrCreate(
				[
					'user_id' => $userId,
					'class_id' => $classId,
				],
				[
					'present' => $present,
					'excuse_submitted' => $excuseSubmitted, // Update excuse_submitted field
				]
			);
		}
	}
	
}

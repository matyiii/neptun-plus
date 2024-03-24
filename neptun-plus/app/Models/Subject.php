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
}

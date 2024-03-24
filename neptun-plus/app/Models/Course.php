<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'courses';

    protected $fillable = [
        'subject_id',
        'code',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'id', 'subject_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_courses');
    }

    public function classes()
    {
        return $this->hasMany(CourseClass::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}

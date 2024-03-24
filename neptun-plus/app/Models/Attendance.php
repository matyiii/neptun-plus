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
}

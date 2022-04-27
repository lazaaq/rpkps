<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use HasFactory, SoftDeletes;

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function studentClassrooms()
    {
        return $this->hasMany(StudentClassroom::class);
    }

    public function courseClassrooms()
    {
        return $this->hasMany(CourseClassroom::class);
    }
}

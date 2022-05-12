<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function rpkps()
    {
        return $this->hasMany(Rpkps::class);
    }
}

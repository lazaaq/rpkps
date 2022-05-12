<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function headOfStudyProgram()
    {
        return $this->hasOne(HeadOfStudyProgram::class);
    }

    public function rpkps()
    {
        return $this->hasMany(Rpkps::class);
    }
}

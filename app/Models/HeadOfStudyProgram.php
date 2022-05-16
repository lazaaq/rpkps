<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeadOfStudyProgram extends Model
{
    use HasFactory;

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }
}

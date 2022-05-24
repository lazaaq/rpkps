<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function learningGoalCourses()
    {
        return $this->hasMany(LearningGoalCourse::class);
    }

    public function rpkps()
    {
        return $this->hasMany(Rpkps::class);
    }

    public function courseClassrooms()
    {
        return $this->hasMany(CourseClassroom::class);
    }

    public function lecturerPlottings()
    {
        return $this->hasMany(LecturerPlotting::class);
    }

    public function curriculum() {
        return $this->belongsTo(Curriculum::class);
    }
}

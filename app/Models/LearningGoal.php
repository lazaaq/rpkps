<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LearningGoal extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['code', 'component', 'value'];

    public function graduateProfileLearningGoals()
    {
        return $this->hasMany(GraduateProfileLearningGoal::class);
    }

    public function learningGoalCourses()
    {
        return $this->hasMany(LearningGoalCourse::class);
    }
}

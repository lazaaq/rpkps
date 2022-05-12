<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LearningGoalCourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['course_id', 'learning_goal_id', 'percentage'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function learningGoal()
    {
        return $this->belongsTo(LearningGoal::class);
    }
}

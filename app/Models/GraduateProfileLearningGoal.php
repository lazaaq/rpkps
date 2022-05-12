<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GraduateProfileLearningGoal extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = ['learning_goal_id', 'graduate_profile_id'];

    public function graduateProfile()
    {
        return $this->belongsTo(GraduateProfile::class);
    }

    public function learningGoal()
    {
        return $this->belongsTo(LearningGoal::class);
    }
}

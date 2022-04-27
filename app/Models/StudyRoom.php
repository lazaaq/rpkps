<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudyRoom extends Model
{
    use HasFactory, SoftDeletes;

    public function weeklyLectures()
    {
        return $this->hasMany(WeeklyLecture::class);
    }
}

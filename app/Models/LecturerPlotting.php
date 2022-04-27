<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LecturerPlotting extends Model
{
    use HasFactory, SoftDeletes;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function weeklyLecturer()
    {
        return $this->hasMany(WeeklyLecturer::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WeeklyLecture extends Model
{
    use HasFactory, SoftDeletes;

    public function rpkpms()
    {
        return $this->hasMany(Rpkpm::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function lecturerPlotting()
    {
        return $this->belongsTo(LecturerPlotting::class);
    }

    public function studyRoom()
    {
        return $this->belongsTo(StudyRoom::class);
    }

}

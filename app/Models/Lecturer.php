<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{
    use HasFactory, SoftDeletes;

    public function lecturerPlotting()
    {
        return $this->hasMany(LecturerPlotting::class);
    }

    public function headOfStudyProgram()
    {
        return $this->hasOne(HeadOfStudyProgram::class);
    }

    public function rpkpsCoordinator() {
        return $this->hasMany(Rpkps::class, 'coordinator', 'id');
    }

    public function rpkpsExpertiseCoordinator() {
        return $this->hasMany(Rpkps::class, 'expertise_coordinator', 'id');
    }

    public function getPhotoAttribute($value) {
        if ($value && strpos($value, 'http') !== 0) {
            return env('ASSET_URL') . env('ASSET_LECTURER_PHOTO') . $value;
        } else {
            return $value;
        }
    }
}

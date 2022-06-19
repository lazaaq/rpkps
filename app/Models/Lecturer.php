<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

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
        $path = 'http://localhost:8000/image/lecturer/photo/';
        if ($value && strpos($value, 'http') !== 0) {
            return $path . $value;
        } else {
            return $value;
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rpkps extends Model
{
    use HasFactory, SoftDeletes;

    public function rpkpms()
    {
        return $this->hasMany(Rpkpm::class);
    }

    public function cpmkCplCourses()
    {
        return $this->hasMany(CpmkCplCourse::class);
    }

    public function materialReferences()
    {
        return $this->hasMany(MaterialReference::class);
    }

    public function studyMaterials()
    {
        return $this->hasMany(StudyMaterial::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function coordinator()
    {
        return $this->belongsTo(Lecturer::class, 'coordinator', 'id');
    }

    public function expertiseCoordinator()
    {
        return $this->belongsTo(Lecturer::class, 'expertise_coordinator', 'id');
    }

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}

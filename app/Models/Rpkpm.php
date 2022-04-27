<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rpkpm extends Model
{
    use HasFactory, SoftDeletes;

    public function rkpms()
    {
        return $this->hasMany(Rkpm::class);
    }

    public function rpkps()
    {
        return $this->belongsTo(Rpkps::class);
    }

    public function learningMedia()
    {
        return $this->hasMany(LearningMedia::class);
    }
}

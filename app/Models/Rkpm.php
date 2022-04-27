<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rkpm extends Model
{
    use HasFactory, SoftDeletes;

    public function weeklyLecture()
    {
        return $this->belongsTo(WeeklyLecture::class);
    }

    public function rpkpm()
    {
        return $this->belongsTo(Rpkpm::class);
    }
}

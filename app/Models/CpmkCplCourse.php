<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CpmkCplCourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = [];

    public function cplCourse()
    {
        return $this->belongsTo(CpmkCplCourse::class);
    }

    public function cpmk()
    {
        return $this->belongsTo(Cpmk::class);
    }

    public function rpkps()
    {
        return $this->belongsTo(Rpkps::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}

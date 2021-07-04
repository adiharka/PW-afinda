<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}

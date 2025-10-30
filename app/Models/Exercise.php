<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'workout_id',
        'name',
        'body_part',
        'sets',
        'reps',
        'duration',
        'rest_period',
        'notes',
        'video_url',
    ];

    public function workout()
    {
        return $this->belongsTo(Workout::class);
    }
}

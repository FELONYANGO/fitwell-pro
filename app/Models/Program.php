<?php

namespace App\Models;

use App\Enums\ProgramCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'trainer_id',
        'title',
        'description',
        'type',
        'duration_weeks',
        'level',
        'status',
    ];

    public function trainer()
    {
        return $this->belongsTo(User::class, 'trainer_id');
    }

    public function assignments()
    {
        return $this->hasMany(ProgramAssignment::class);
    }

    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }
}

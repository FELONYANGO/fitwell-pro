<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'height',
        'weight',
        'fitness_goal',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function programAssignments()
    {
        return $this->hasMany(ProgramAssignment::class);
    }

    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }

    public function progressUploads()
    {
        return $this->hasMany(ProgressUpload::class);
    }
}

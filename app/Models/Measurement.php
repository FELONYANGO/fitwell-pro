<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'weight', 'height', 'bmi', 'body_fat_percentage',
        'waist', 'hips', 'chest', 'arm', 'thigh', 'recorded_at'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

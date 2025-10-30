<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'file_path', 'type', 'description', 'uploaded_at'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

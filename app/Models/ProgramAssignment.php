<?php

namespace App\Models;

use App\Enums\ProgramAssignmentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProgramAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'program_id',
        'start_date',
        'end_date',
        'progress',
        'status',
        'progress_percentage',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}

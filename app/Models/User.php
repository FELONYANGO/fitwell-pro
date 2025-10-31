<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Relationships
     */

    // ✅ If a client profile exists
    public function client()
    {
        return $this->hasOne(Client::class);
    }

    // ✅ If a trainer profile exists
    public function trainer()
    {
        return $this->hasOne(Trainer::class);
    }

    // ✅ Programs assigned to the client
    public function clientPrograms()
    {
        return $this->belongsToMany(Program::class, 'client_programs')
                    ->withPivot(['progress', 'status'])
                    ->withTimestamps();
    }

    // ✅ Programs created by a trainer
    public function trainerPrograms()
    {
        return $this->hasMany(Program::class, 'trainer_id');
    }

    // ✅ Messages sent and received
    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    /**
     * Role-based helpers
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isTrainer(): bool
    {
        return $this->role === 'trainer';
    }

    public function isClient(): bool
    {
        return $this->role === 'client';
    }

    /**
     * Filament Access
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // only admins access filament
        return $this->isAdmin();
    }
}

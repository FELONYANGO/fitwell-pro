<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use Laravel\Cashier\Billable;
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

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function trainer()
    {
        return $this->hasOne(Trainer::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'trainer_id');
    }

    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
    /**
     * Helper methods
     */

public function getUserName(): string
{


    return $this->getFilamentName();
}

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->isAdmin();
    }


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

}

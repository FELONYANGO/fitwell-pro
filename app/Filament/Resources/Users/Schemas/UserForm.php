<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                TextInput::make('username'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Select::make('user_type')
                    ->options(['client' => 'Client', 'trainer' => 'Trainer', 'admin' => 'Admin'])
                    ->default('client')
                    ->required(),
                Select::make('gender')
                    ->options(['male' => 'Male', 'female' => 'Female']),
                TextInput::make('age')
                    ->numeric(),
                TextInput::make('height')
                    ->numeric(),
                TextInput::make('weight')
                    ->numeric(),
                Select::make('fitness_level')
                    ->options(['beginner' => 'Beginner', 'intermediate' => 'Intermediate', 'advanced' => 'Advanced']),
                Select::make('activity_level')
                    ->options([
            'sedentary' => 'Sedentary',
            'lightly_active' => 'Lightly active',
            'moderately_active' => 'Moderately active',
            'very_active' => 'Very active',
            'extremely_active' => 'Extremely active',
        ])
                    ->default('moderately_active')
                    ->required(),
                Textarea::make('fitness_goals')
                    ->columnSpanFull(),
                TextInput::make('profile_picture'),
                TextInput::make('preferences'),
                TextInput::make('provider_id'),
                TextInput::make('provider_name'),
                Toggle::make('needs_profile_completion')
                    ->required(),
                TextInput::make('stripe_id'),
                TextInput::make('pm_type'),
                TextInput::make('pm_last_four'),
                DateTimePicker::make('trial_ends_at'),
            ]);
    }
}

<?php

namespace App\Filament\Resources\ClientNotes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ClientNoteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('client_id')
                    ->relationship('client', 'id')
                    ->required(),
                Select::make('trainer_id')
                    ->relationship('trainer', 'name')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Select::make('type')
                    ->options([
            'general' => 'General',
            'progress' => 'Progress',
            'concern' => 'Concern',
            'achievement' => 'Achievement',
        ])
                    ->default('general')
                    ->required(),
                Toggle::make('is_private')
                    ->required(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Exercises\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ExerciseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('workout_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('body_part'),
                TextInput::make('sets')
                    ->required()
                    ->numeric()
                    ->default(3),
                TextInput::make('reps')
                    ->required()
                    ->numeric()
                    ->default(10),
                TextInput::make('duration'),
                TextInput::make('rest_period'),
                Textarea::make('notes')
                    ->columnSpanFull(),
                TextInput::make('video_url')
                    ->url(),
            ]);
    }
}

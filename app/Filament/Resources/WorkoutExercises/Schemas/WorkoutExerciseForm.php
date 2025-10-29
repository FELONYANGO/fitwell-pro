<?php

namespace App\Filament\Resources\WorkoutExercises\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class WorkoutExerciseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('workout_id')
                    ->required()
                    ->numeric(),
                TextInput::make('exercise_id')
                    ->required()
                    ->numeric(),
                TextInput::make('sets')
                    ->numeric(),
                TextInput::make('reps')
                    ->numeric(),
                TextInput::make('weight')
                    ->numeric(),
                TextInput::make('duration_seconds')
                    ->numeric(),
                TextInput::make('distance')
                    ->numeric(),
                Textarea::make('notes')
                    ->columnSpanFull(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(1),
            ]);
    }
}

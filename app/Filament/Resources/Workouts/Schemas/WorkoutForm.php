<?php

namespace App\Filament\Resources\Workouts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class WorkoutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('video_link'),
                TextInput::make('program_id')
                    ->numeric(),
                TextInput::make('day_number')
                    ->required()
                    ->numeric(),
            ]);
    }
}

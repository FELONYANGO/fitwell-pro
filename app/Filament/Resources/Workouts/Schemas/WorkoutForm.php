<?php

namespace App\Filament\Resources\Workouts\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class WorkoutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('type')
                    ->options([
            'strength' => 'Strength',
            'cardio' => 'Cardio',
            'flexibility' => 'Flexibility',
            'sports' => 'Sports',
            'other' => 'Other',
        ])
                    ->default('strength')
                    ->required(),
                Select::make('difficulty')
                    ->options(['beginner' => 'Beginner', 'intermediate' => 'Intermediate', 'advanced' => 'Advanced'])
                    ->default('intermediate')
                    ->required(),
                TextInput::make('duration_minutes')
                    ->numeric(),
                TextInput::make('calories_burned')
                    ->numeric(),
                TextInput::make('met_value')
                    ->numeric(),
                DatePicker::make('workout_date')
                    ->required(),
                TimePicker::make('start_time'),
                TimePicker::make('end_time'),
                Select::make('status')
                    ->options([
            'planned' => 'Planned',
            'in_progress' => 'In progress',
            'completed' => 'Completed',
            'skipped' => 'Skipped',
        ])
                    ->default('planned')
                    ->required(),
                TextInput::make('week_number')
                    ->required()
                    ->numeric(),
                Textarea::make('notes')
                    ->columnSpanFull(),
                TextInput::make('program_id')
                    ->numeric(),
            ]);
    }
}

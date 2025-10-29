<?php

namespace App\Filament\Resources\GoalTrackings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GoalTrackingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('goal_id')
                    ->relationship('goal', 'title')
                    ->required(),
                Select::make('client_id')
                    ->relationship('client', 'id')
                    ->required(),
                TextInput::make('value')
                    ->required()
                    ->numeric(),
                TextInput::make('unit'),
                DatePicker::make('tracking_date')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
                Select::make('entry_type')
                    ->options([
            'manual' => 'Manual',
            'automatic' => 'Automatic',
            'measurement' => 'Measurement',
            'workout' => 'Workout',
            'assessment' => 'Assessment',
        ])
                    ->default('manual')
                    ->required(),
                TextInput::make('metadata'),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Goals\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GoalForm
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
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('category')
                    ->options([
            'weight_loss' => 'Weight loss',
            'weight_gain' => 'Weight gain',
            'muscle_building' => 'Muscle building',
            'strength' => 'Strength',
            'endurance' => 'Endurance',
            'flexibility' => 'Flexibility',
            'general_fitness' => 'General fitness',
            'sports_performance' => 'Sports performance',
            'health_improvement' => 'Health improvement',
            'other' => 'Other',
        ])
                    ->default('general_fitness')
                    ->required(),
                Select::make('type')
                    ->options([
            'client_set' => 'Client set',
            'trainer_set' => 'Trainer set',
            'program_based' => 'Program based',
            'milestone' => 'Milestone',
            'primary' => 'Primary',
            'secondary' => 'Secondary',
            'long_term' => 'Long term',
            'short_term' => 'Short term',
        ])
                    ->default('trainer_set'),
                Select::make('measurement_type')
                    ->options([
            'weight' => 'Weight',
            'body_fat' => 'Body fat',
            'muscle_mass' => 'Muscle mass',
            'measurements' => 'Measurements',
            'performance' => 'Performance',
            'time_based' => 'Time based',
            'repetition_based' => 'Repetition based',
            'distance_based' => 'Distance based',
            'custom' => 'Custom',
        ])
                    ->default('custom')
                    ->required(),
                TextInput::make('target_value')
                    ->numeric(),
                TextInput::make('target_unit'),
                TextInput::make('current_value')
                    ->numeric(),
                DatePicker::make('target_date'),
                DatePicker::make('start_date'),
                Select::make('status')
                    ->options([
            'active' => 'Active',
            'completed' => 'Completed',
            'paused' => 'Paused',
            'cancelled' => 'Cancelled',
        ])
                    ->default('active')
                    ->required(),
                TextInput::make('priority')
                    ->required()
                    ->numeric()
                    ->default(1),
                Textarea::make('notes')
                    ->columnSpanFull(),
                Toggle::make('is_active_for_matching')
                    ->required(),
                TextInput::make('medical_considerations'),
                TextInput::make('milestones'),
            ]);
    }
}

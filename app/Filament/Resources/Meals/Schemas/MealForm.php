<?php

namespace App\Filament\Resources\Meals\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MealForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('nutrition_plan_id')
                    ->relationship('nutritionPlan', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Select::make('meal_type')
                    ->options([
            'breakfast' => 'Breakfast',
            'morning_snack' => 'Morning snack',
            'lunch' => 'Lunch',
            'afternoon_snack' => 'Afternoon snack',
            'dinner' => 'Dinner',
            'evening_snack' => 'Evening snack',
        ])
                    ->required(),
                TextInput::make('day_number')
                    ->required()
                    ->numeric(),
                TextInput::make('meal_time'),
                TextInput::make('calories')
                    ->required()
                    ->numeric(),
                TextInput::make('macros')
                    ->required(),
                TextInput::make('ingredients'),
                Textarea::make('preparation_instructions')
                    ->columnSpanFull(),
                TextInput::make('prep_time_minutes')
                    ->numeric(),
                TextInput::make('recipe_images'),
                TextInput::make('alternatives'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}

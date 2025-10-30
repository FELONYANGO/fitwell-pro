<?php

namespace App\Filament\Resources\ProgramAssignments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProgramAssignmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('client_id')
                    ->required()
                    ->numeric(),
                TextInput::make('program_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('start_date'),
                DatePicker::make('end_date'),
                TextInput::make('progress')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Select::make('status')
                    ->options(['active' => 'Active', 'completed' => 'Completed', 'paused' => 'Paused'])
                    ->default('active')
                    ->required(),
                TextInput::make('progress_percentage')
                    ->required()
                    ->numeric()
                    ->default(0.0),
            ]);
    }
}

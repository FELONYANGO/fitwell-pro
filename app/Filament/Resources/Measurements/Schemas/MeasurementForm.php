<?php

namespace App\Filament\Resources\Measurements\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MeasurementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('client_id')
                    ->required()
                    ->numeric(),
                TextInput::make('weight')
                    ->required()
                    ->numeric(),
                TextInput::make('body_fat')
                    ->numeric(),
                TextInput::make('chest')
                    ->numeric(),
                TextInput::make('waist')
                    ->numeric(),
                TextInput::make('hips')
                    ->numeric(),
                DatePicker::make('date')
                    ->required(),
            ]);
    }
}

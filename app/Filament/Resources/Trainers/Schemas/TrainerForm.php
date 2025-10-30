<?php

namespace App\Filament\Resources\Trainers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TrainerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('specialization'),
                TextInput::make('certification'),
                Textarea::make('bio')
                    ->columnSpanFull(),
                TextInput::make('availability'),
                TextInput::make('experience_years')
                    ->numeric(),
            ]);
    }
}

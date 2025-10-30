<?php

namespace App\Filament\Resources\ProgressUploads\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProgressUploadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('client_id')
                    ->required()
                    ->numeric(),
                TextInput::make('program_id')
                    ->numeric(),
                Select::make('type')
                    ->options(['photo' => 'Photo', 'video' => 'Video'])
                    ->required(),
                TextInput::make('file_path')
                    ->required(),
                Select::make('category')
                    ->options([
            'form_check' => 'Form check',
            'progress' => 'Progress',
            'meal_prep' => 'Meal prep',
            'check_in' => 'Check in',
            'injury_assessment' => 'Injury assessment',
        ])
                    ->required(),
                TextInput::make('week')
                    ->numeric(),
                Textarea::make('trainer_feedback')
                    ->columnSpanFull(),
                TextInput::make('rating')
                    ->numeric(),
                Toggle::make('approved')
                    ->required(),
            ]);
    }
}

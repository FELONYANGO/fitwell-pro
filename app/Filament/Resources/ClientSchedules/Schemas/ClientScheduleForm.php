<?php

namespace App\Filament\Resources\ClientSchedules\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class ClientScheduleForm
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
                DatePicker::make('scheduled_date')
                    ->required(),
                TimePicker::make('start_time')
                    ->required(),
                TimePicker::make('end_time'),
                TextInput::make('session_type')
                    ->required()
                    ->default('training'),
                TextInput::make('location'),
                Textarea::make('notes')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options([
            'scheduled' => 'Scheduled',
            'completed' => 'Completed',
            'cancelled' => 'Cancelled',
            'missed' => 'Missed',
        ])
                    ->default('scheduled')
                    ->required(),
                DateTimePicker::make('completed_at'),
                TextInput::make('actual_duration_minutes')
                    ->numeric(),
                TextInput::make('performance_rating')
                    ->numeric(),
            ]);
    }
}

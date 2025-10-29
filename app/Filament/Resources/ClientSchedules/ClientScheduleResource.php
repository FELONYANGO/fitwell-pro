<?php

namespace App\Filament\Resources\ClientSchedules;

use App\Filament\Resources\ClientSchedules\Pages\CreateClientSchedule;
use App\Filament\Resources\ClientSchedules\Pages\EditClientSchedule;
use App\Filament\Resources\ClientSchedules\Pages\ListClientSchedules;
use App\Filament\Resources\ClientSchedules\Schemas\ClientScheduleForm;
use App\Filament\Resources\ClientSchedules\Tables\ClientSchedulesTable;
use App\Models\ClientSchedule;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClientScheduleResource extends Resource
{
    protected static ?string $model = ClientSchedule::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ClientSchedules';

    public static function form(Schema $schema): Schema
    {
        return ClientScheduleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClientSchedulesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClientSchedules::route('/'),
            'create' => CreateClientSchedule::route('/create'),
            'edit' => EditClientSchedule::route('/{record}/edit'),
        ];
    }
}

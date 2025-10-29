<?php

namespace App\Filament\Resources\ClientNotes;

use App\Filament\Resources\ClientNotes\Pages\CreateClientNote;
use App\Filament\Resources\ClientNotes\Pages\EditClientNote;
use App\Filament\Resources\ClientNotes\Pages\ListClientNotes;
use App\Filament\Resources\ClientNotes\Schemas\ClientNoteForm;
use App\Filament\Resources\ClientNotes\Tables\ClientNotesTable;
use App\Models\ClientNote;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClientNoteResource extends Resource
{
    protected static ?string $model = ClientNote::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ClientNotes';

    public static function form(Schema $schema): Schema
    {
        return ClientNoteForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClientNotesTable::configure($table);
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
            'index' => ListClientNotes::route('/'),
            'create' => CreateClientNote::route('/create'),
            'edit' => EditClientNote::route('/{record}/edit'),
        ];
    }
}

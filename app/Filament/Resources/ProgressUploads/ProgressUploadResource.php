<?php

namespace App\Filament\Resources\ProgressUploads;

use App\Filament\Resources\ProgressUploads\Pages\CreateProgressUpload;
use App\Filament\Resources\ProgressUploads\Pages\EditProgressUpload;
use App\Filament\Resources\ProgressUploads\Pages\ListProgressUploads;
use App\Filament\Resources\ProgressUploads\Schemas\ProgressUploadForm;
use App\Filament\Resources\ProgressUploads\Tables\ProgressUploadsTable;
use App\Models\ProgressUpload;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProgressUploadResource extends Resource
{
    protected static ?string $model = ProgressUpload::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ProgressUploads';

    public static function form(Schema $schema): Schema
    {
        return ProgressUploadForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProgressUploadsTable::configure($table);
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
            'index' => ListProgressUploads::route('/'),
            'create' => CreateProgressUpload::route('/create'),
            'edit' => EditProgressUpload::route('/{record}/edit'),
        ];
    }
}

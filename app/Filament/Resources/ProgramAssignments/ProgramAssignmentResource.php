<?php

namespace App\Filament\Resources\ProgramAssignments;

use App\Filament\Resources\ProgramAssignments\Pages\CreateProgramAssignment;
use App\Filament\Resources\ProgramAssignments\Pages\EditProgramAssignment;
use App\Filament\Resources\ProgramAssignments\Pages\ListProgramAssignments;
use App\Filament\Resources\ProgramAssignments\Schemas\ProgramAssignmentForm;
use App\Filament\Resources\ProgramAssignments\Tables\ProgramAssignmentsTable;
use App\Models\ProgramAssignment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProgramAssignmentResource extends Resource
{
    protected static ?string $model = ProgramAssignment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ProgramAssignments';

    public static function form(Schema $schema): Schema
    {
        return ProgramAssignmentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProgramAssignmentsTable::configure($table);
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
            'index' => ListProgramAssignments::route('/'),
            'create' => CreateProgramAssignment::route('/create'),
            'edit' => EditProgramAssignment::route('/{record}/edit'),
        ];
    }
}

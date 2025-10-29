<?php

namespace App\Filament\Resources\GoalTrackings;

use App\Filament\Resources\GoalTrackings\Pages\CreateGoalTracking;
use App\Filament\Resources\GoalTrackings\Pages\EditGoalTracking;
use App\Filament\Resources\GoalTrackings\Pages\ListGoalTrackings;
use App\Filament\Resources\GoalTrackings\Schemas\GoalTrackingForm;
use App\Filament\Resources\GoalTrackings\Tables\GoalTrackingsTable;
use App\Models\GoalTracking;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GoalTrackingResource extends Resource
{
    protected static ?string $model = GoalTracking::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'GoalTrackins';

    public static function form(Schema $schema): Schema
    {
        return GoalTrackingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GoalTrackingsTable::configure($table);
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
            'index' => ListGoalTrackings::route('/'),
            'create' => CreateGoalTracking::route('/create'),
            'edit' => EditGoalTracking::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\MealFood;

use App\Filament\Resources\MealFood\Pages\CreateMealFood;
use App\Filament\Resources\MealFood\Pages\EditMealFood;
use App\Filament\Resources\MealFood\Pages\ListMealFood;
use App\Filament\Resources\MealFood\Schemas\MealFoodForm;
use App\Filament\Resources\MealFood\Tables\MealFoodTable;
use App\Models\MealFood;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MealFoodResource extends Resource
{
    protected static ?string $model = MealFood::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'MealFoods';

    public static function form(Schema $schema): Schema
    {
        return MealFoodForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MealFoodTable::configure($table);
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
            'index' => ListMealFood::route('/'),
            'create' => CreateMealFood::route('/create'),
            'edit' => EditMealFood::route('/{record}/edit'),
        ];
    }
}

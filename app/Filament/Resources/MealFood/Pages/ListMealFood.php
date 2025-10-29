<?php

namespace App\Filament\Resources\MealFood\Pages;

use App\Filament\Resources\MealFood\MealFoodResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMealFood extends ListRecords
{
    protected static string $resource = MealFoodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

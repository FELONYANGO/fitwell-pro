<?php

namespace App\Filament\Resources\MealFood\Pages;

use App\Filament\Resources\MealFood\MealFoodResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMealFood extends EditRecord
{
    protected static string $resource = MealFoodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

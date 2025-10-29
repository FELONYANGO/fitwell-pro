<?php

namespace App\Filament\Resources\GoalTrackings\Pages;

use App\Filament\Resources\GoalTrackings\GoalTrackingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGoalTracking extends EditRecord
{
    protected static string $resource = GoalTrackingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

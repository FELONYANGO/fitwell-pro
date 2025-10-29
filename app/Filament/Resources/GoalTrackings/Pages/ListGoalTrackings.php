<?php

namespace App\Filament\Resources\GoalTrackings\Pages;

use App\Filament\Resources\GoalTrackings\GoalTrackingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGoalTrackings extends ListRecords
{
    protected static string $resource = GoalTrackingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

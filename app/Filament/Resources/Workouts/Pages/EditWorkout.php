<?php

namespace App\Filament\Resources\Workouts\Pages;

use App\Filament\Resources\Workouts\WorkoutResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWorkout extends EditRecord
{
    protected static string $resource = WorkoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

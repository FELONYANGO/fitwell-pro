<?php

namespace App\Filament\Resources\ClientSchedules\Pages;

use App\Filament\Resources\ClientSchedules\ClientScheduleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClientSchedule extends EditRecord
{
    protected static string $resource = ClientScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

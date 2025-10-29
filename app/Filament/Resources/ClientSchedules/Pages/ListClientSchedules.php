<?php

namespace App\Filament\Resources\ClientSchedules\Pages;

use App\Filament\Resources\ClientSchedules\ClientScheduleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClientSchedules extends ListRecords
{
    protected static string $resource = ClientScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ProgressUploads\Pages;

use App\Filament\Resources\ProgressUploads\ProgressUploadResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProgressUploads extends ListRecords
{
    protected static string $resource = ProgressUploadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

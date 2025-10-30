<?php

namespace App\Filament\Resources\ProgressUploads\Pages;

use App\Filament\Resources\ProgressUploads\ProgressUploadResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProgressUpload extends EditRecord
{
    protected static string $resource = ProgressUploadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

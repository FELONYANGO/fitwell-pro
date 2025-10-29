<?php

namespace App\Filament\Resources\ClientNotes\Pages;

use App\Filament\Resources\ClientNotes\ClientNoteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClientNote extends EditRecord
{
    protected static string $resource = ClientNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

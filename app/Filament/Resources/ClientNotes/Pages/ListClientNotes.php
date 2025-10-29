<?php

namespace App\Filament\Resources\ClientNotes\Pages;

use App\Filament\Resources\ClientNotes\ClientNoteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClientNotes extends ListRecords
{
    protected static string $resource = ClientNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

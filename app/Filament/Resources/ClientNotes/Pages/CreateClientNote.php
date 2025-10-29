<?php

namespace App\Filament\Resources\ClientNotes\Pages;

use App\Filament\Resources\ClientNotes\ClientNoteResource;
use Filament\Resources\Pages\CreateRecord;

class CreateClientNote extends CreateRecord
{
    protected static string $resource = ClientNoteResource::class;
}

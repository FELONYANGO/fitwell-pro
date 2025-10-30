<?php

namespace App\Filament\Resources\ProgramAssignments\Pages;

use App\Filament\Resources\ProgramAssignments\ProgramAssignmentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProgramAssignments extends ListRecords
{
    protected static string $resource = ProgramAssignmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

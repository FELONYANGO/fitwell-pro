<?php

namespace App\Filament\Resources\ProgramAssignments\Pages;

use App\Filament\Resources\ProgramAssignments\ProgramAssignmentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProgramAssignment extends EditRecord
{
    protected static string $resource = ProgramAssignmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

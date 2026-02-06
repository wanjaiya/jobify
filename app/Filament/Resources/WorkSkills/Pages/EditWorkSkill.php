<?php

namespace App\Filament\Resources\WorkSkills\Pages;

use App\Filament\Resources\WorkSkills\WorkSkillResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWorkSkill extends EditRecord
{
    protected static string $resource = WorkSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

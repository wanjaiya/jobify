<?php

namespace App\Filament\Resources\WorkSkills\Pages;

use App\Filament\Resources\WorkSkills\WorkSkillResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWorkSkills extends ListRecords
{
    protected static string $resource = WorkSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

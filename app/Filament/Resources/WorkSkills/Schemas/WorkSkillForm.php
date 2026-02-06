<?php

namespace App\Filament\Resources\WorkSkills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WorkSkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('category')
                    ->default(null),
            ]);
    }
}

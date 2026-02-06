<?php

namespace App\Filament\Resources\WorkSkills;

use App\Filament\Resources\WorkSkills\Pages\CreateWorkSkill;
use App\Filament\Resources\WorkSkills\Pages\EditWorkSkill;
use App\Filament\Resources\WorkSkills\Pages\ListWorkSkills;
use App\Filament\Resources\WorkSkills\Schemas\WorkSkillForm;
use App\Filament\Resources\WorkSkills\Tables\WorkSkillsTable;
use App\Models\WorkSkill;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WorkSkillResource extends Resource
{
    protected static ?string $model = WorkSkill::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $modelLabel = "Skills";

    public static function form(Schema $schema): Schema
    {
        return WorkSkillForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WorkSkillsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWorkSkills::route('/'),
            'create' => CreateWorkSkill::route('/create'),
            'edit' => EditWorkSkill::route('/{record}/edit'),
        ];
    }
}

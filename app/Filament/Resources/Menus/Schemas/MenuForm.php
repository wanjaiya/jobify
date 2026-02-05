<?php

namespace App\Filament\Resources\Menus\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use App\Models\MenuType;
use Filament\Schemas\Components\Section;

class MenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Section::make("Fields")
            ->schema([
                Select::make("menu_type_id")
                ->label("Menu Type")
                ->options(MenuType::where('status', '=', 'published')->pluck("name", "id")),
                TextInput::make('name')
                ->required(),
                TextInput::make('slug')
                ->required(),
                TextInput::make('position')
                ->required()
                ->numeric(),
            ])->columnSpan(2),
            Section::make("Meta")
            ->schema([
                Select::make('status')
                ->options(['draft' => 'Draft', 'published' => 'Published', 'unpublished' => 'Unpublished'])
                ->default('draft')
                ->required(),
                DateTimePicker::make('published_at'),
            ]),


        ])->columns(3);
    }
}

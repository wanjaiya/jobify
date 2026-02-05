<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use App\Models\User;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //

                Section::make('Company Information')
                ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('location')
                    ->label('Location')
                    ->required()
                    ->maxLength(255),
                TextInput::make('contact_name')
                    ->label('Contact Name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('contact_email')
                    ->label('Contact Email')
                    ->unique('companies', 'contact_email', ignoreRecord: true)
                    ->validationMessages([
                        'unique' => 'The email address has already been registered.',
                    ])
                    ->required()
                    ->email(),
                TextInput::make('phone_number')
                    ->label('Phone Number')
                    ->required()
                    ->tel(),
                FileUpload::make('logo')->disk('public')->directory('companies'),
                ])->columnSpan(2),
                Section::make('Status')
                ->schema([
                Checkbox::make('published')->default(false),
                DatePicker::make('published_at')->default(now())
                ])
            ])->columns(3);
    }
}


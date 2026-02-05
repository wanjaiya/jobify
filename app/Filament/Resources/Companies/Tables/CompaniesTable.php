<?php

namespace App\Filament\Resources\Companies\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;


class CompaniesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //

                ImageColumn::make('logo')->disk('public')
                    ->label('Logo'),
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                TextColumn::make('location')
                    ->label('Location')
                    ->searchable(),
                TextColumn::make('contact_name')
                    ->label('Contact Name'),
                TextColumn::make('contact_email')
                    ->label('Contact Email'),
                TextColumn::make('phone_number')
                    ->label('Phone Number'),
                TextColumn::make('published_at')
                    ->label('Published At')
                    ->searchable(),
                TextColumn::make('createdBy.name')
                    ->label('Created By')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

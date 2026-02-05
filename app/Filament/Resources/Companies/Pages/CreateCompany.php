<?php

namespace App\Filament\Resources\Companies\Pages;

use App\Filament\Resources\Companies\CompanyResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\CreateAction;

class CreateCompany extends CreateRecord
{
    protected static string $resource = CompanyResource::class;

    
    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['created_by'] = auth()->id();

    return $data;
}
}

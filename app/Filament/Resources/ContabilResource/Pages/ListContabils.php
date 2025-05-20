<?php

namespace App\Filament\Resources\ContabilResource\Pages;

use App\Filament\Resources\ContabilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContabils extends ListRecords
{
    protected static string $resource = ContabilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

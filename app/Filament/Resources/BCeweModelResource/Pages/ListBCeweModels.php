<?php

namespace App\Filament\Resources\BCeweModelResource\Pages;

use App\Filament\Resources\BCeweModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBCeweModels extends ListRecords
{
    protected static string $resource = BCeweModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

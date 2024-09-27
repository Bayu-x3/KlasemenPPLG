<?php

namespace App\Filament\Resources\BCowoModelResource\Pages;

use App\Filament\Resources\BCowoModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBCowoModels extends ListRecords
{
    protected static string $resource = BCowoModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

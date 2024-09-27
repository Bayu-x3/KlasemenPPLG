<?php

namespace App\Filament\Resources\ACowoModelResource\Pages;

use App\Filament\Resources\ACowoModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListACowoModels extends ListRecords
{
    protected static string $resource = ACowoModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

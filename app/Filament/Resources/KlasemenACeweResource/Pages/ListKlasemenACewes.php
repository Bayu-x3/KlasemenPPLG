<?php

namespace App\Filament\Resources\KlasemenACeweResource\Pages;

use App\Filament\Resources\KlasemenACeweResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKlasemenACewes extends ListRecords
{
    protected static string $resource = KlasemenACeweResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

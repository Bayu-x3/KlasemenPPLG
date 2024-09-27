<?php

namespace App\Filament\Resources\TopPutraResource\Pages;

use App\Filament\Resources\TopPutraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopPutras extends ListRecords
{
    protected static string $resource = TopPutraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

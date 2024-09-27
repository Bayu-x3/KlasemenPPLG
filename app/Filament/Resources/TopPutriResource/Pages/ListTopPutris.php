<?php

namespace App\Filament\Resources\TopPutriResource\Pages;

use App\Filament\Resources\TopPutriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopPutris extends ListRecords
{
    protected static string $resource = TopPutriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

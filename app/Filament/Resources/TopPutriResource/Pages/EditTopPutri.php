<?php

namespace App\Filament\Resources\TopPutriResource\Pages;

use App\Filament\Resources\TopPutriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopPutri extends EditRecord
{
    protected static string $resource = TopPutriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

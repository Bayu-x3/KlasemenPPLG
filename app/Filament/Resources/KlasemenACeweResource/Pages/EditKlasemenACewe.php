<?php

namespace App\Filament\Resources\KlasemenACeweResource\Pages;

use App\Filament\Resources\KlasemenACeweResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKlasemenACewe extends EditRecord
{
    protected static string $resource = KlasemenACeweResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

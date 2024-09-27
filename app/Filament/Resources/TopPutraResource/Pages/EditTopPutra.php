<?php

namespace App\Filament\Resources\TopPutraResource\Pages;

use App\Filament\Resources\TopPutraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopPutra extends EditRecord
{
    protected static string $resource = TopPutraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

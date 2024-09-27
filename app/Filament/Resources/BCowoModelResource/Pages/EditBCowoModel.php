<?php

namespace App\Filament\Resources\BCowoModelResource\Pages;

use App\Filament\Resources\BCowoModelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBCowoModel extends EditRecord
{
    protected static string $resource = BCowoModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

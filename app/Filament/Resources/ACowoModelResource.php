<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ACowoModelResource\Pages;
use App\Filament\Resources\ACowoModelResource\RelationManagers;
use App\Models\ACowoModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ACowoModelResource extends Resource
{
    protected static ?string $model = ACowoModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tables\Columns\TextColumn::make('gol')
                    ->sortable(['gol']),
                Tables\Columns\TextColumn::make('kelases.kelas'),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListACowoModels::route('/'),
            'create' => Pages\CreateACowoModel::route('/create'),
            'edit' => Pages\EditACowoModel::route('/{record}/edit'),
        ];
    }
}

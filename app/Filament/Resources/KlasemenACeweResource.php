<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KlasemenACeweResource\Pages;
use App\Filament\Resources\KlasemenACeweResource\RelationManagers;
use App\Models\ACeweModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KlasemenACeweResource extends Resource
{
    protected static ?string $model = ACeweModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('gol')
                    ->numeric(),    
                Forms\Components\Select::make('kelas_id')
                    ->relationship(name: 'kelases', titleAttribute: 'kelas')
                    ->searchable(['kelas', 'id'])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
            'index' => Pages\ListKlasemenACewes::route('/'),
            'create' => Pages\CreateKlasemenACewe::route('/create'),
            'edit' => Pages\EditKlasemenACewe::route('/{record}/edit'),
        ];
    }
}
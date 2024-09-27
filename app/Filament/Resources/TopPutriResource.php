<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopPutriResource\Pages;
use App\Filament\Resources\TopPutriResource\RelationManagers;
use App\Models\TopPutri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TopPutriResource extends Resource
{
    protected static ?string $model = TopPutri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('gol')
                ->numeric(),
                Forms\Components\TextInput::make('name')
                ->maxLength(255) 
                ->placeholder('Masukkan nama...')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('gol')
                    ->sortable(['gol']),
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
            'index' => Pages\ListTopPutris::route('/'),
            'create' => Pages\CreateTopPutri::route('/create'),
            'edit' => Pages\EditTopPutri::route('/{record}/edit'),
        ];
    }
}

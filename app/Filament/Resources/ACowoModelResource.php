<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\ACowoModel;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ACowoModelResource\Pages;
use App\Filament\Resources\ACowoModelResource\RelationManagers;
use App\Filament\Resources\ACowoModelResource\Pages\EditACowoModel;
use App\Filament\Resources\ACowoModelResource\Pages\ListACowoModels;
use App\Filament\Resources\ACowoModelResource\Pages\CreateACowoModel;

class ACowoModelResource extends Resource
{
    protected static ?string $model = ACowoModel::class;

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
            'index' => Pages\ListACowoModels::route('/'),
            'create' => Pages\CreateACowoModel::route('/create'),
            'edit' => Pages\EditACowoModel::route('/{record}/edit'),
        ];
    }
}

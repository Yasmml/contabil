<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FinanceiroResource\Pages;
use App\Filament\Resources\FinanceiroResource\RelationManagers;
use App\Models\Financeiro;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FinanceiroResource extends Resource
{
    protected static ?string $model = Financeiro::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListFinanceiros::route('/'),
            'create' => Pages\CreateFinanceiro::route('/create'),
            'edit' => Pages\EditFinanceiro::route('/{record}/edit'),
        ];
    }
}

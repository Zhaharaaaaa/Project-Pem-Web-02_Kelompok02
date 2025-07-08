<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FasilitasResource\Pages;
use App\Filament\Resources\FasilitasResource\RelationManagers;
use App\Models\Fasilitas;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;



class FasilitasResource extends Resource
{
    protected static ?string $model = Fasilitas::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Fasilitas')
                    ->required()
                    ->maxLength(50),
                TextInput::make('deskrips')
                    ->label('Deskripsi')
                    ->nullable()
                    ->maxLength(255),
                TextInput::make('qty')
                    ->label('Jumlah')
                    ->numeric()
                    ->minValue(0)
                    ->required(),
                FileUpload::make('gambar')
                    ->directory('fasilitas')
                    ->label('Gambar Fasilitas')
                    ->image()
                    ->disk('public')
                    ->imagePreviewHeight(150)
                    ->maxsize(20480)
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Fasilitas')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('deskrips')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('qty')
                    ->label('Jumlah')
                    ->sortable(),
                ImageColumn::make('gambar')
                    ->label(' Fasilitas ')
                    ->disk('public')
                    ->height(100)
                    ->width(150)
            ])
            
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListFasilitas::route('/'),
            'create' => Pages\CreateFasilitas::route('/create'),
            'edit' => Pages\EditFasilitas::route('/{record}/edit'),
            'view' => Pages\ViewFasilitas::route('/{record}'),
        ];
    }

}

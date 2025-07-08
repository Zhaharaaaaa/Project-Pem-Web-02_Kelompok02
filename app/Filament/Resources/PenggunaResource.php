<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenggunaResource\Pages;
use App\Filament\Resources\PenggunaResource\RelationManagers;
use App\Models\Pengguna;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use function Laravel\Prompts\select;

class PenggunaResource extends Resource
{
    protected static ?string $model = Pengguna::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Nama Pengguna')
                    ->searchable()
                    ->required(),
                TextInput::make('nim')
                    ->label('NIM Pengguna')
                    ->required()
                    ->maxLength(20),
                TextInput::make('email')
                    ->label('Email Pengguna')
                    ->email()
                    ->required()
                    ->maxLength(100),
                TextInput::make('no_telpon')
                    ->label('No Telepon Pengguna')
                    ->tel()
                    ->required()
                    ->maxLength(15),
                Select::make('prodi')
                    ->label('Program Studi Pengguna')
                    ->options([
                        'Teknik Informatika' => 'Teknik Informatika',
                        'Sistem Informasi' => 'Sistem Informasi',
                        'Bisnis Digital' => 'Bisnis Digital',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('nim')
                    ->label('NIM')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('no_telpon')
                    ->label('No Telepon')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('prodi')
                    ->label('Program Studi')
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
            'index' => Pages\ListPenggunas::route('/'),
            'create' => Pages\CreatePengguna::route('/create'),
            'edit' => Pages\EditPengguna::route('/{record}/edit'),
            'view' => Pages\ViewPengguna::route('/{record}'),
        ];
    }
    public static function getEloquentQuery(): Builder
    {
    $query = parent::getEloquentQuery();

    if (auth()->user()->role === 'mahasiswa') {
        return $query->where('user_id', auth()->id());
    }

    return $query;
    }
}

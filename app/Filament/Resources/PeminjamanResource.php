<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeminjamanResource\Pages;
use App\Filament\Resources\PeminjamanResource\RelationManagers;
use App\Models\Peminjaman;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeminjamanResource extends Resource
{
    protected static ?string $model = Peminjaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Nama Peminjam')
                    ->searchable()
                    ->required(),
                Select::make('ruangan_id')
                    ->relationship('ruangan', 'nama')
                    ->label('Ruangan')
                    ->searchable()
                    ->required(),
                DatePicker::make('tanggal_pinjam')
                    ->label('Tanggal Peminjaman')
                    ->required(),
                TimePicker::make('jam_mulai')
                    ->label('Jam Mulai')
                    ->required(),
                TimePicker::make('jam_selesai')
                    ->label('Jam Selesai')
                    ->required(),
                TextInput::make('lokasi')
                    ->label('Lokasi')
                    ->nullable()
                    ->maxLength(100),
                TextInput::make('keterangan')
                    ->label('Keterangan')
                    ->nullable()
                    ->columnspanfull()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Nama Peminjam')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('ruangan.nama')
                    ->label('Ruangan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tanggal_pinjam')
                    ->label('Tanggal Peminjaman')
                    ->date()
                    ->sortable(),
                TextColumn::make('jam_mulai')
                    ->label('Jam Mulai')
                    ->time()
                    ->sortable(),
                TextColumn::make('jam_selesai')
                    ->label('Jam Selesai')
                    ->time()
                    ->sortable(),
                TextColumn::make('lokasi')
                    ->label('Lokasi')
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(100)
                    ->sortable(),
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
            'index' => Pages\ListPeminjamen::route('/'),
            'create' => Pages\CreatePeminjaman::route('/create'),
            'edit' => Pages\EditPeminjaman::route('/{record}/edit'),
            'view' => Pages\ViewPeminjaman::route('/{record}'),
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

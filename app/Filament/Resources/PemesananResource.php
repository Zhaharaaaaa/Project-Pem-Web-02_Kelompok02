<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemesananResource\Pages;
use App\Filament\Resources\PemesananResource\Pages\ListPemesanans;
use App\Models\Pemesanan;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class PemesananResource extends Resource
{
    // Model ini diarahkan ke tabel 'peminjaman'
    protected static ?string $model = Pemesanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Pemesanans';
    protected static ?string $slug = 'pemesanan';
    protected static ?string $navigationGroup = 'Rekap Peminjaman';

    public static function form(Form $form): Form
    {
        return $form->schema([
            // TextInput::make('catatan')
            //         ->label('Catatan')
            //         ->required(),

            Select::make('status')
                    ->options([
                        'Menunggu' => 'Menunggu',
                        'Disetujui' => 'Disetujui',
                        'Ditolak' => 'Ditolak',
                    ])
                    ->default('Menunggu')
                    ->label('Status')
                    ->required()
        ]);      
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Nama Peminjam')
                    ->sortable(),

                TextColumn::make('tanggal_pinjam')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make('jam_mulai')
                    ->label('Mulai')
                    ->sortable(),

                TextColumn::make('jam_selesai')
                    ->label('Selesai')
                    ->sortable(),

                TextColumn::make('ruangan.nama')
                    ->label('Ruangan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('keterangan')
                    ->label('Keperluan')
                    ->wrap(),

                // TextColumn::make('catatan')
                //     ->label('catatan')
                //     ->sortable()
                //     ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'warning' => 'Menunggu',
                        'success' => 'Disetujui',
                        'danger' => 'Ditolak',
                    ])->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([]); // Tidak ada bulk action (hapus/ubah masal)
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPemesanans::route('/'),
            'view' => Pages\ViewPemesanan::route('/{record}')
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
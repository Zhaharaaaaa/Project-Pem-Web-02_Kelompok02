<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RekapanResource\Pages;
use App\Models\Rekapan;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class RekapanResource extends Resource
{
    // Model ini diarahkan ke tabel 'peminjaman'
    protected static ?string $model = Rekapan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Rekapan Pemesanan';
    protected static ?string $slug = 'rekapans';
    protected static ?string $navigationGroup = 'Laporan';

    public static function form(Form $form): Form
    {
        // Tidak perlu form karena ini hanya tampilan laporan
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal_peminjaman')
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

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'menunggu' => 'gray',
                        'disetujui' => 'success',
                        'ditolak' => 'danger',
                        default => 'secondary',
                    }),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([]) // Tidak ada tombol edit per baris
            ->bulkActions([]); // Tidak ada bulk action (hapus/ubah masal)
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRekapans::route('/'),
        ];
    }
}

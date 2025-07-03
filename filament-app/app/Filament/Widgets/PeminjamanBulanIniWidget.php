<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Peminjaman; // <-- Ganti dengan path Model Peminjaman Anda
use Carbon\Carbon; // <-- Import Carbon untuk menangani tanggal

class PeminjamanBulanIniWidget extends BaseWidget
{
    protected static ?string $heading = 'Data Peminjaman Bulan Ini';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            // Query untuk mengambil data peminjaman di bulan dan tahun saat ini
            ->query(
                Peminjaman::query()
                    ->whereMonth('tanggal_peminjaman', Carbon::now()->month)
                    ->whereYear('tanggal_peminjaman', Carbon::now()->year)
            )
            ->columns([
                Tables\Columns\TextColumn::make('id'),

                Tables\Columns\TextColumn::make('tanggal_peminjaman')
                    ->label('Tanggal Pinjam')
                    ->date('d M Y'),
                Tables\Columns\TextColumn::make('tempat_pinjam')
                    ->label('Tempat Pinjam'),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'TELAH SELESAI' => 'warning',
                        'BELUM SELESAI' => 'success',
                        default => 'gray',
                    }),
            ]);
    }
}

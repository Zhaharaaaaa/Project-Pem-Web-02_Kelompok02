<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Peminjaman; 
use Carbon\Carbon; 

class PeminjamanBulanIniChart extends BaseWidget
{
    protected static ?string $heading = 'Peminjaman di Bulan Ini';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            // Query untuk mengambil data peminjaman di bulan dan tahun saat ini
            ->query(
                Peminjaman::query()
                    ->whereMonth('tanggal_pinjam', Carbon::now()->month)
                    ->whereYear('tanggal_pinjam', Carbon::now()->year)
            )
            ->columns([
                TextColumn::make('id') ->label ('No'),

                TextColumn::make('tanggal_pinjam')
                    ->label('Tanggal Peminjaman')
                    ->date('d M Y'),

                TextColumn::make('ruangan.nama')
                    ->label('Ruangan Yang Dipinjam'),

            ]);
    }

}
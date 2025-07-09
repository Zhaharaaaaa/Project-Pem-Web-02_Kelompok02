<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Ruangan;
use App\Models\Pengguna;
use App\Models\Pemesanan;
use App\Models\Fasilitas;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Card::make('Total Ruangan', Ruangan::count())
                ->description(Ruangan::count())
                ->color('primary')
                ->icon('heroicon-o-building-office'),
            Card::make('Total Pengguna', Pengguna::count())
                ->description(Pengguna::count())
                ->color('success')
                ->icon('heroicon-o-users'),
            Card::make('Total Peminjaman', Pemesanan::count())
                ->description(Pemesanan::count())
                ->color('warning')
                ->icon('heroicon-o-clipboard-document-list'),
            Card::make('Total Fasilitas', Fasilitas::count())
                ->description(Fasilitas::count())
                ->color('danger')
                ->icon('heroicon-o-building-library'),  
        ];
    }
    public static function canView(): bool
   {
    return auth()->user()->role === 'admin' || auth()->user()->role === 'staff';
   }
}

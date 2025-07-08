<?php

namespace App\Filament\Widgets;

use App\Models\Peminjaman;
use Filament\Widgets\ChartWidget;
use Carbon\Carbon;

class PeminjamanChart extends ChartWidget
{
    protected static ?string $heading = 'Peminjaman Ruangan per Bulan';

    protected static ?int $sort = 4;

    protected function getData(): array
{
    // Buat daftar bulan tetap dari Jan sampai Dec 2025
    $months = collect(range(1, 12))
        ->map(function ($i) {
            return Carbon::create(2025, $i)->format('M Y'); // Jan 2025, Feb 2025, ...
        });

    // Ambil data peminjaman hanya di tahun 2025
    $data = Peminjaman::query()
        ->whereYear('created_at', 2025)
        ->get()
        ->groupBy(function ($item) {
            return Carbon::parse($item->created_at)->format('M Y');
        })
        ->map(fn ($group) => $group->count());

    // Cocokkan jumlah tiap bulan, isi 0 jika tidak ada data
    $chartData = $months->map(fn ($month) => $data[$month] ?? 0);

    return [
        'datasets' => [
            [
                'label' => 'Jumlah Peminjaman (2025)',
                'data' => $chartData->toArray(),
                'backgroundColor' => 'rgba(255, 213, 0, 0.61)',
                'borderColor' => 'rgb(255, 213, 0)',
                'borderWidth' => 1,
            ],
        ],
        'labels' => $months->toArray(),
    ];
}
    protected function getType(): string
    {
        return 'bar'; 
    }

    public static function canView(): bool
    {
    return auth()->user()->role === 'admin' || auth()->user()->role === 'staff';
    }

}
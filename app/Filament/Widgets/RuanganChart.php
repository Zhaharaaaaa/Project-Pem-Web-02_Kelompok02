<?php

namespace App\Filament\Widgets;

use App\Models\Ruangan;
use Filament\Widgets\ChartWidget;

class RuanganChart extends ChartWidget
{
    protected static ?string $heading = 'Top 5 Ruangan Paling Sering Dipinjam';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        // Ambil 5 ruangan dengan jumlah peminjaman terbanyak
        $data = Ruangan::withCount('peminjaman')
            ->orderByDesc('peminjaman_count')
            ->limit(5)
            ->get()
            ->pluck('peminjaman_count', 'nama');

        return [
            'datasets' => [
                [
                    'label' => 'Total Peminjaman',
                    'data' => $data->values()->toArray(),
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $data->keys()->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }

    public static function canView(): bool
    {
    return auth()->user()->role === 'admin' || auth()->user()->role === 'staff';
    }

}

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
        // Query Eloquent yang sudah diperbaiki
        $data = Ruangan::query()
            ->withCount('peminjaman')
            ->orderByDesc('peminjaman_count')
            ->limit(5)
            ->get() // <-- TAMBAHKAN get() DI SINI
            ->pluck('peminjaman_count', 'nama_ruangan');

        return [
            'datasets' => [
                [
                    'label' => 'Total Peminjaman',
                    'data' => $data->values()->toArray(),
                    'backgroundColor' => 'rgba(153, 102, 255, 0.5)',
                    'borderColor' => 'rgba(153, 102, 255, 1)',
                ],
            ],
            'labels' => $data->keys()->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}

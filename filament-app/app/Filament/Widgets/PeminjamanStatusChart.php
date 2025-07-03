<?php

namespace App\Filament\Widgets;

use App\Models\Peminjaman;
use Filament\Widgets\ChartWidget;

class PeminjamanStatusChart extends ChartWidget
{
    protected static ?string $heading = 'Distribusi Status Peminjaman';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $statuses = Peminjaman::query()
            ->select('status')
            ->get()
            ->groupBy('status')
            ->map(function ($group) {
                return count($group);
            });

        return [
            'datasets' => [
                [
                    'label' => 'Status Peminjaman',
                    'data' => $statuses->values()->toArray(),
                    'backgroundColor' => [
                        'rgba(255, 205, 86, 0.5)',  // Pending
                        'rgba(75, 192, 192, 0.5)',  // Approved
                        'rgba(255, 99, 132, 0.5)',   // Rejected
                    ],
                    'borderColor' => [
                        'rgba(255, 205, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                    ],
                ],
            ],
            'labels' => $statuses->keys()->map(fn($status) => ucfirst($status))->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}

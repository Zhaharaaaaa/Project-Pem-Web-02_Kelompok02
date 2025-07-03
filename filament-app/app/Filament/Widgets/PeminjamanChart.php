<?php

namespace App\Filament\Widgets;

use App\Models\Peminjaman;
use Filament\Widgets\ChartWidget;
use Carbon\Carbon;

class PeminjamanChart extends ChartWidget
{
    protected static ?string $heading = 'Peminjaman Ruangan (30 Hari Terakhir)';

    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $data = Peminjaman::query()
            ->where('created_at', '>=', Carbon::now()->subDays(30))
            ->select('created_at')
            ->orderBy('created_at')
            ->get()
            ->groupBy(function ($item) {
                return Carbon::parse($item->created_at)->format('d M');
            })
            ->map(function ($group) {
                return count($group);
            });

        return [
            'datasets' => [
                [
                    'label' => 'Peminjaman per Hari',
                    'data' => $data->values()->toArray(),
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $data->keys()->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

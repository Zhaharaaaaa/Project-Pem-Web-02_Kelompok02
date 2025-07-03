<?php

namespace App\Filament\Resources\RekapanResource\Pages;

use App\Filament\Resources\RekapanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRekapans extends ListRecords
{
    protected static string $resource = RekapanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

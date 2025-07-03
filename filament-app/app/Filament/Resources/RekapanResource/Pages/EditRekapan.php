<?php

namespace App\Filament\Resources\RekapanResource\Pages;

use App\Filament\Resources\RekapanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRekapan extends EditRecord
{
    protected static string $resource = RekapanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

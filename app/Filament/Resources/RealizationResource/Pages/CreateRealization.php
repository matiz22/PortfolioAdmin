<?php

namespace App\Filament\Resources\RealizationResource\Pages;

use App\Filament\Resources\RealizationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRealization extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = RealizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}

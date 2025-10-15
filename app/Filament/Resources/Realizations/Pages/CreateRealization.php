<?php

namespace App\Filament\Resources\Realizations\Pages;

use App\Filament\Resources\Realizations\RealizationResource;
use Filament\Resources\Pages\CreateRecord;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use LaraZeus\SpatieTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateRealization extends CreateRecord
{
    use Translatable;

    protected static string $resource = RealizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Realizations\Pages;

use App\Filament\Resources\Realizations\RealizationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use LaraZeus\SpatieTranslatable\Resources\Pages\EditRecord\Concerns\Translatable;

class EditRealization extends EditRecord
{
    use Translatable;

    protected static string $resource = RealizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            DeleteAction::make(),
        ];
    }
}

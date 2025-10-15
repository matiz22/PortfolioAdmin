<?php

namespace App\Filament\Resources\Realizations\Pages;

use App\Filament\Resources\Realizations\RealizationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use LaraZeus\SpatieTranslatable\Resources\Pages\ListRecords\Concerns\Translatable;

class ListRealizations extends ListRecords
{
    use Translatable;

    protected static string $resource = RealizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

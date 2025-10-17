<?php

namespace App\Filament\Resources\Proficiencies\Pages;

use App\Filament\Resources\Proficiencies\ProficiencyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use LaraZeus\SpatieTranslatable\Resources\Pages\ListRecords\Concerns\Translatable;

class ListProficiencies extends ListRecords
{
    use Translatable;

    protected static string $resource = ProficiencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            CreateAction::make(),
        ];
    }
}

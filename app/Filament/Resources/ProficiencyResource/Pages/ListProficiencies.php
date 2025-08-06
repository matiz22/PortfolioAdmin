<?php

namespace App\Filament\Resources\ProficiencyResource\Pages;

use App\Filament\Resources\ProficiencyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProficiencies extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ProficiencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

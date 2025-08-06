<?php

namespace App\Filament\Resources\ProficiencyResource\Pages;

use App\Filament\Resources\ProficiencyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProficiency extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = ProficiencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}

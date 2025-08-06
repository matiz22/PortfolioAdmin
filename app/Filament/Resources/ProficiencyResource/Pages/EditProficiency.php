<?php

namespace App\Filament\Resources\ProficiencyResource\Pages;

use App\Filament\Resources\ProficiencyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProficiency extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ProficiencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Proficiencies\Pages;

use App\Filament\Resources\Proficiencies\ProficiencyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use LaraZeus\SpatieTranslatable\Resources\Pages\EditRecord\Concerns\Translatable;

class EditProficiency extends EditRecord
{
    use Translatable;

    protected static string $resource = ProficiencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            DeleteAction::make(),
        ];
    }
}

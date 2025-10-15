<?php

namespace App\Filament\Resources\MailEntryResource\Pages;

use App\Filament\Resources\MailEntryResource;
use Filament\Resources\Pages\ViewRecord;

class ViewMailEntry extends ViewRecord
{
    protected static string $resource = MailEntryResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}

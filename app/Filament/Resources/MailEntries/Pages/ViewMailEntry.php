<?php

namespace App\Filament\Resources\MailEntries\Pages;

use App\Filament\Resources\MailEntries\MailEntryResource;
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

<?php

namespace App\Filament\Resources\MailEntries\Pages;

use App\Filament\Resources\MailEntries\MailEntryResource;
use Filament\Resources\Pages\ListRecords;

class ListMailEntries extends ListRecords
{
    protected static string $resource = MailEntryResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}

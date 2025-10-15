<?php

namespace App\Filament\Resources\MailEntryResource\Pages;

use App\Filament\Resources\MailEntryResource;
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

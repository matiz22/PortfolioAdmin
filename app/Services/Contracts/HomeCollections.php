<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface HomeCollections
{
    public function getHomeCollections(): Collection;

    public function getHomeCollectionsTranslated(): array;
}

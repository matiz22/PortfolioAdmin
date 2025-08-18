<?php

namespace App\Services;

use App\Models\Realization;

class RealizationsService extends OrderedService
{

    protected function getModelClass(): string
    {
        return Realization::class;
    }
}

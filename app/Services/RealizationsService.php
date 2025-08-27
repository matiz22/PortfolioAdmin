<?php

namespace App\Services;

use App\Models\Realization;

class RealizationsService extends OrderedService
{
    public function __construct()
    {
        parent::__construct(Realization::class, ['technologies', 'skills']);
    }
}

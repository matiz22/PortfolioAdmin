<?php

namespace App\Services;

use App\Models\Realization;
use App\Services\Contracts\HomeCollections;
use App\Traits\GetHomePageItems;

class RealizationsService extends BaseService implements HomeCollections
{
    use GetHomePageItems;

    public function __construct()
    {
        parent::__construct(Realization::class, ['technologies', 'skills', 'technologies.proficiency']);
    }
}

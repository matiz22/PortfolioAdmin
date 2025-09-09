<?php

namespace App\Services;

use App\Models\Education;
use App\Services\Contracts\HomeCollections;
use App\Traits\GetHomePageItems;

class EducationService extends BaseService implements HomeCollections
{
    use GetHomePageItems;

    public function __construct()
    {
        parent::__construct(Education::class, ['technologies', 'skills']);
    }
}

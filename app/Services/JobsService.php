<?php

namespace App\Services;

use App\Models\Job;
use App\Services\Contracts\HomeCollections;
use App\Traits\GetHomePageItems;

class JobsService extends BaseService implements HomeCollections
{
    use GetHomePageItems;
    public function __construct()
    {
        parent::__construct(Job::class, ['technologies', 'skills']);
    }
}

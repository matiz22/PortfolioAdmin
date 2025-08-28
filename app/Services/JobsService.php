<?php

namespace App\Services;

use App\Models\Job;

class JobsService extends BaseService
{
    public function __construct()
    {
        parent::__construct(Job::class, ['technologies', 'skills']);
    }
}

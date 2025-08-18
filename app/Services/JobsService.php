<?php

namespace App\Services;

use App\Models\Job;

class JobsService extends OrderedService
{

    protected function getModelClass(): string
    {
        return Job::class;
    }
}

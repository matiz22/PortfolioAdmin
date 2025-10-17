<?php

namespace App\Services\Stats;

use App\Models\Job;
use App\Traits\Stats\BaseStatsImpl;

class JobsStatsService extends BaseStatsService
{
    use BaseStatsImpl;

    public function __construct()
    {
        parent::__construct(Job::class);
    }

}

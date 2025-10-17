<?php

namespace App\Services\Stats;

use App\Models\Project;
use App\Traits\Stats\BaseStatsImpl;

class ProjectsStatsService extends BaseStatsService
{
    use BaseStatsImpl;

    public function __construct()
    {
        parent::__construct(Project::class);
    }
}

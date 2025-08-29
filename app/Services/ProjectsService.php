<?php

namespace App\Services;

use App\Models\Project;
use App\Services\Contracts\HomeCollections;
use App\Traits\GetHomePageItems;

class ProjectsService extends BaseService implements HomeCollections
{
    use GetHomePageItems;

    public function __construct()
    {
        parent::__construct(Project::class, ['technologies']);
    }
}

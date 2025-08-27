<?php

namespace App\Services;

use App\Models\Project;

class ProjectsService extends OrderedService
{
    public function __construct()
    {
        parent::__construct(Project::class, ['technologies']);
    }
}

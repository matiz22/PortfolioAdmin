<?php

namespace App\Services;

use App\Models\Project;

class ProjectsService extends OrderedService
{

    protected function getModelClass(): string
    {
        return Project::class;
    }
}

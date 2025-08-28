<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;

class ProjectsService extends BaseService
{
    public function __construct()
    {
        parent::__construct(Project::class, ['technologies']);
    }
}

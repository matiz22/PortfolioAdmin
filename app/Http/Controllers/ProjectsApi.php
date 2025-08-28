<?php

namespace App\Http\Controllers;

use App\Services\ProjectsService;

class ProjectsApi extends BaseController
{

    public function __construct(ProjectsService $service)
    {
        parent::__construct($service);
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\BaseService;
use App\Services\ProjectsService;

class ProjectsApi extends BaseController
{
    protected BaseService $orderedService;

    public function __construct(ProjectsService $service)
    {
        parent::__construct($service);
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\OrderedService;
use App\Services\ProjectsService;

class ProjectsApi extends OrderedController
{
    protected OrderedService $orderedService;

    public function __construct(ProjectsService $service)
    {
        parent::__construct($service);
    }
}

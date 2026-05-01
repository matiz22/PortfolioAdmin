<?php

namespace App\Http\Controllers;

use App\Http\Contracts\HomeEndpoints;
use App\Services\ProjectsService;
use App\Traits\GetHomeEndpoints;

/**
 * @property ProjectsService $service
 */
class ProjectsApi extends BaseController implements HomeEndpoints
{
    use GetHomeEndpoints;

    public function __construct(ProjectsService $service)
    {
        parent::__construct($service);
    }
}

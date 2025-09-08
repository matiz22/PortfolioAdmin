<?php

namespace App\Http\Controllers;

use App\Http\Contracts\HomeEndpoints;
use App\Models\Job;
use App\Services\JobsService;
use App\Traits\GetHomeEndpoints;

class JobsApi extends BaseController implements HomeEndpoints
{
    use GetHomeEndpoints;
    public function __construct(JobsService $service)
    {

        parent::__construct($service);
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\JobsService;

class JobsApi extends BaseController
{
    public function __construct(JobsService $service)
    {
        parent::__construct($service);
    }
}

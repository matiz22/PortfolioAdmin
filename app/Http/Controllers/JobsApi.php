<?php

namespace App\Http\Controllers;

use App\Services\JobsService;
use App\Services\OrderedService;

class JobsApi extends OrderedController
{
    protected OrderedService $orderedService;

    public function __construct(JobsService $service)
    {
        parent::__construct($service);
    }
}

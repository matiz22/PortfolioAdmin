<?php

namespace App\Http\Controllers;

use App\Services\OrderedService;
use App\Services\TechnologiesService;

class TechnologiesApi extends OrderedController
{
    protected OrderedService $orderedService;

    public function __construct(TechnologiesService $service)
    {
        parent::__construct($service);
    }
}

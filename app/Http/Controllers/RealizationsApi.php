<?php

namespace App\Http\Controllers;

use App\Services\OrderedService;
use App\Services\RealizationsService;

class RealizationsApi extends OrderedController
{
    protected OrderedService $orderedService;

    public function __construct(RealizationsService $service)
    {
        parent::__construct($service);
    }
}

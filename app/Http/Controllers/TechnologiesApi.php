<?php

namespace App\Http\Controllers;

use App\Services\TechnologiesService;

class TechnologiesApi extends BaseController
{
    public function __construct(TechnologiesService $service)
    {
        parent::__construct($service);
    }
}

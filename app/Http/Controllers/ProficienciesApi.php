<?php

namespace App\Http\Controllers;

use App\Services\BaseService;
use App\Services\ProficienciesService;

class ProficienciesApi extends BaseController
{
    public function __construct(ProficienciesService $service)
    {
        parent::__construct($service);
    }
}



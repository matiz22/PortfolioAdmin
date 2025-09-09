<?php

namespace App\Http\Controllers;

use App\Http\Contracts\HomeEndpoints;
use App\Services\EducationService;
use App\Traits\GetHomeEndpoints;


class EducationApi extends BaseController implements HomeEndpoints
{
    use GetHomeEndpoints;
    public function __construct(EducationService $service)
    {
        parent::__construct($service);
    }
}

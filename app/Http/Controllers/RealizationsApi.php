<?php

namespace App\Http\Controllers;

use App\Http\Contracts\HomeEndpoints;
use App\Services\RealizationsService;
use App\Traits\GetHomeEndpoints;

class RealizationsApi extends BaseController implements HomeEndpoints
{
    use GetHomeEndpoints;

    public function __construct(RealizationsService $service)
    {
        parent::__construct($service);
    }
}

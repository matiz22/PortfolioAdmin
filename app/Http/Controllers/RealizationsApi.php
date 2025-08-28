<?php

namespace App\Http\Controllers;

use App\Services\RealizationsService;

class RealizationsApi extends BaseController
{
    public function __construct(RealizationsService $service)
    {
        parent::__construct($service);
    }
}

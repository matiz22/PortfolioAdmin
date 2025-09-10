<?php

namespace App\Http\Controllers;

use App\Http\Contracts\HomeEndpoints;
use App\Services\CertificationsService;
use App\Traits\GetHomeEndpoints;

class CertificationsApi extends BaseController implements HomeEndpoints
{
    use GetHomeEndpoints;
    public function __construct(CertificationsService $service)
    {
        parent::__construct($service);
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\CertificationsService;

class CertificationsApi extends BaseController
{
    public function __construct(CertificationsService $service)
    {
        parent::__construct($service);
    }
}

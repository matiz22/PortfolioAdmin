<?php

namespace App\Http\Controllers;

use App\Services\BaseService;
use App\Services\CertificationsService;

class CertificationsApi extends BaseController
{
    protected BaseService $orderedService;

    public function __construct(CertificationsService $service)
    {
        parent::__construct($service);
    }
}

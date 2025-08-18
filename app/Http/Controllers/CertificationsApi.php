<?php

namespace App\Http\Controllers;

use App\Services\EducationService;
use App\Services\OrderedService;

class CertificationsApi extends OrderedController
{
    protected OrderedService $orderedService;

    public function __construct(EducationService $service)
    {
        parent::__construct($service);
    }
}

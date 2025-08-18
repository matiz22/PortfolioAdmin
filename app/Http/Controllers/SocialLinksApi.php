<?php

namespace App\Http\Controllers;

use App\Services\OrderedService;
use App\Services\SocialLinksService;

class SocialLinksApi extends OrderedController
{
    protected OrderedService $orderedService;

    public function __construct(SocialLinksService $service)
    {
        parent::__construct($service);
    }
}

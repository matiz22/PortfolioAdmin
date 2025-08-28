<?php

namespace App\Http\Controllers;

use App\Services\SocialLinksService;

class SocialLinksApi extends BaseController
{
    public function __construct(SocialLinksService $service)
    {
        parent::__construct($service);
    }
}

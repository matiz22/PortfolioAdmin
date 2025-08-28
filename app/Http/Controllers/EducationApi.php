<?php

namespace App\Http\Controllers;

use App\Services\EducationService;


class EducationApi extends BaseController
{
    public function __construct(EducationService $service)
    {
        parent::__construct($service);
    }
}

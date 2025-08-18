<?php

namespace App\Http\Controllers;

use App\Services\OrderedService;
use App\Services\SkillsService;

class SkillsApi extends OrderedController
{
    protected OrderedService $orderedService;

    public function __construct(SkillsService $service)
    {
        parent::__construct($service);
    }
}

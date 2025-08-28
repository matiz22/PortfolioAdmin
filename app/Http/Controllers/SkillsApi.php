<?php

namespace App\Http\Controllers;

use App\Services\SkillsService;

class SkillsApi extends BaseController
{
    public function __construct(SkillsService $service)
    {
        parent::__construct($service);
    }
}

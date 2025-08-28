<?php

namespace App\Services;

use App\Models\Technology;

class TechnologiesService extends BaseService
{
    public function __construct()
    {
        parent::__construct(Technology::class, ['proficiencies']);
    }
}

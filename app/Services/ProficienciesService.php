<?php

namespace App\Services;

use App\Models\Proficiency;

class ProficienciesService extends BaseService
{
    public function __construct()
    {
        parent::__construct(Proficiency::class);
    }
}

<?php

namespace App\Services;

use App\Models\Education;

class EducationService extends BaseService
{

    public function __construct()
    {
        parent::__construct(Education::class, ['technologies', 'skills']);
    }
}

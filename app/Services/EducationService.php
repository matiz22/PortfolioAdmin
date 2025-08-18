<?php

namespace App\Services;

use App\Models\Education;

class EducationService extends OrderedService
{

    protected function getModelClass(): string
    {
        return Education::class;
    }
}

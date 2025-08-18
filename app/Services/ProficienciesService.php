<?php

namespace App\Services;

use App\Models\Proficiency;

class ProficienciesService extends BaseService
{
    protected function getModelClass(): string
    {
        return Proficiency::class;
    }
}

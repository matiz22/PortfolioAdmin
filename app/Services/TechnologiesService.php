<?php

namespace App\Services;

use App\Models\Technology;

class TechnologiesService extends OrderedService
{

    /**
     * @inheritDoc
     */
    protected function getModelClass(): string
    {
        return Technology::class;
    }
}

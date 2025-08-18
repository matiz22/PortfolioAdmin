<?php

namespace App\Services;

use App\Models\Certification;

class CertificationsService extends OrderedService
{

    protected function getModelClass(): string
    {
        return Certification::class;
    }
}

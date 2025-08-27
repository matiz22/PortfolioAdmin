<?php

namespace App\Services;

use App\Models\Certification;

class CertificationsService extends OrderedService
{
    public function __construct()
    {
        parent::__construct(Certification::class, ['technologies', 'skills']);
    }
}

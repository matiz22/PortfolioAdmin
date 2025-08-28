<?php

namespace App\Services;

use App\Models\Certification;

class CertificationsService extends BaseService
{
    public function __construct()
    {
        parent::__construct(Certification::class, ['technologies', 'skills']);
    }
}

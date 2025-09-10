<?php

namespace App\Services;

use App\Models\Certification;
use App\Services\Contracts\HomeCollections;
use App\Traits\GetHomePageItems;

class CertificationsService extends BaseService implements HomeCollections
{
    use GetHomePageItems;
    public function __construct()
    {
        parent::__construct(Certification::class, ['technologies', 'skills']);
    }
}

<?php

namespace App\Services\Stats;

use App\Models\Certification;
use App\Traits\Stats\BaseStatsImpl;

class CertificationsStatsService extends BaseStatsService
{
    use BaseStatsImpl;

    public function __construct()
    {
        parent::__construct(Certification::class);
    }
}

<?php

namespace App\Services\Stats;

use App\Models\Realization;
use App\Traits\Stats\BaseStatsImpl;

class RealizationsStatsService extends BaseStatsService
{
    use BaseStatsImpl;

    public function __construct()
    {
        parent::__construct(Realization::class);
    }
}

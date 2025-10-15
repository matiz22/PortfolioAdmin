<?php

namespace App\Services\Stats;

use App\Models\Education;
use App\Traits\Stats\BaseStatsImpl;

class EducationStatsService extends BaseStatsService
{
    use BaseStatsImpl;

    public function __construct()
    {
        parent::__construct(Education::class);
    }

    public function completed()
    {
        return Education::select('id')->whereNotNull('end_date')->count();
    }
}

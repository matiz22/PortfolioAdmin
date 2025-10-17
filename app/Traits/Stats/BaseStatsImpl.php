<?php

namespace App\Traits\Stats;

use App\Services\Stats\BaseStatsService;

/**
 * @mixin BaseStatsService
 */
trait BaseStatsImpl
{

    public function allCounted(): int
    {
        return $this->modelClass::select('id')->count();
    }

    public function publishedCounted(): int
    {
        return $this->modelClass::select('id')->where('published', '=', true)->count();
    }

    public function homePageCounted(): int
    {
        return $this->modelClass::select('id')->where('home_page', '=', true)->count();
    }
}

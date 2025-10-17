<?php

namespace App\Services\Stats;

use Illuminate\Database\Eloquent\Model;

abstract class BaseStatsService
{
    /**
     * The model class name.
     *
     * @var class-string<Model>
     */
    protected string $modelClass;

    public function __construct(string $modelClass)
    {
        $this->modelClass = $modelClass;
    }

    abstract public function allCounted(): int;

    abstract public function publishedCounted(): int;

    abstract public function homePageCounted(): int;
}

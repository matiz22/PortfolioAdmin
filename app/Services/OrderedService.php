<?php

namespace App\Services;

use App\Utils\Translatable;
use Illuminate\Database\Eloquent\Collection;

abstract class OrderedService extends BaseService
{
    public function __construct(string $modelClass, array $relations = [])
    {
        parent::__construct($modelClass, $relations);
    }

    public function getAllOrderedTranslated(): array
    {
        return Translatable::translateCollection($this->getAllOrdered());
    }

    public function getAllOrdered(): Collection
    {
        return $this->modelClass::with($this->relations)->ordered()->get();
    }
}

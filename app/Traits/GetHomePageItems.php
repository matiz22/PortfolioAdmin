<?php namespace App\Traits;

use App\Services\BaseService;
use App\Utils\Translatable;
use Illuminate\Database\Eloquent\Collection;

/**
 * @mixin BaseService
 */

trait GetHomePageItems
{
    public function getHomeCollections(): Collection
    {
        return $this->newBaseQuery()->where('home_page', true)->get();
    }

    public function getHomeCollectionsTranslated(): array
    {
        return Translatable::translateCollection($this->getHomeCollections());
    }
}

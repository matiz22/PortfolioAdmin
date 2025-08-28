<?php


namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasPublishedField
{
    /**
     * Scope to order records by display order.
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('published', true);
    }
}

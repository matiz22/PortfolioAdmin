<?php


namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasDisplayOrder
{
    /**
     * Scope to order records by display order.
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order');
    }
}

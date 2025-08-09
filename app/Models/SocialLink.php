<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'url',
        'icon_class',
        'order',
        'is_visible',
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'is_visible' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Scope to only visible social links.
     */
    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    /**
     * Scope to order social links by display order.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}

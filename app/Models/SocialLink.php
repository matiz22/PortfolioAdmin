<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasDisplayOrder;
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
}

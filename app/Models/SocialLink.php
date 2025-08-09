<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasDisplayOrder;

    protected $fillable = [
        'name',
        'url',
        'icon',
        'order',
    ];

    protected $casts = [
        'order' => 'integer',
    ];
}

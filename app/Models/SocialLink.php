<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use App\Traits\ManagesFileUploads;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasDisplayOrder, ManagesFileUploads;

    protected $fillable = [
        'name',
        'url',
        'icon',
        'order',
    ];

    protected array $fileFields = ['icon'];

    protected $casts = [
        'order' => 'integer',
    ];
}

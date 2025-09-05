<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use App\Traits\HasPublishedField;
use App\Traits\ManagesFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Realization extends Model
{
    use
        HasDisplayOrder,
        HasTranslations,
        ManagesFileUploads,
        HasPublishedField;

    public array $translatable = [
        'title',
        'description',
    ];

    protected $fillable = [
        'title',
        'client_name',
        'client_url',
        'client_logo',
        'location',
        'thumbnail',
        'description',
        'order',
        'published',
        'home_page',
        'short_desc',
    ];

    protected array $fileFields = ['thumbnail ', 'client_logo'];

    protected $casts = [
        'order' => 'integer',
        'published' => 'boolean',
        'home_page' => 'boolean',
    ];

    /**
     * Many-to-many relation to Skills
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'realization_skill');
    }

    /**
     * Many-to-many relation to Technologies
     */
    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class, 'realization_technology');
    }
}

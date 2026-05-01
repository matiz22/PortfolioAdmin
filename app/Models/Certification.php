<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use App\Traits\HasPublishedField;
use App\Traits\ManagesFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Certification extends Model
{
    use
        HasDisplayOrder,
        HasTranslations,
        ManagesFileUploads,
        HasPublishedField;

    public array $translatable = [
        'name',
        'description',
        'seo_title',
        'seo_description',
        'short_desc',
    ];

    protected array $fileFields = ['thumbnail'];

    protected $fillable = [
        'name',
        'slug',
        'issuing_organization',
        'issue_date',
        'expiration_date',
        'credential_id',
        'credential_url',
        'description',
        'short_desc',
        'order',
        'published',
        'home_page',
        'thumbnail',
        'seo_enabled',
        'seo_title',
    ];

    protected $casts = [
        'issue_date' => 'date',
        'expiration_date' => 'date',
        'order' => 'integer',
        'published' => 'boolean',
        'home_page' => 'boolean',
        'seo_enabled' => 'boolean',
    ];

    /**
     * Many-to-many relation to Skills
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'certification_skill');
    }

    /**
     * Many-to-many relation to Technologies
     */
    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class, 'certification_technology');
    }
}

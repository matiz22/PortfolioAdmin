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

    public array $translatable = ['name', 'description'];

    protected array $fileFields = ['thumbnail'];

    protected $fillable = [
        'name',
        'issuing_organization',
        'issue_date',
        'expiration_date',
        'credential_id',
        'credential_url',
        'description',
        'order',
        'published',
        'home_page',
        'thumbnail'
    ];

    protected $casts = [
        'issue_date' => 'date',
        'expiration_date' => 'date',
        'order' => 'integer',
        'published' => 'boolean',
        'home_page' => 'boolean',
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

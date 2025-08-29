<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use App\Traits\HasPublishedField;
use App\Traits\ManagesFileUploads;
use App\Traits\ManagesMultipleFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use
        HasDisplayOrder,
        HasTranslations,
        ManagesMultipleFileUploads,
        HasPublishedField,
        ManagesFileUploads;

    public array $translatable = ['title', 'description'];
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'live_url',
        'repo_url',
        'description',
        'start_date',
        'end_date',
        'order',
        'screenshots',
        'home_page',
        'short_desc',
        'published',
    ];

    protected array $filesFields = ['screenshots'];
    protected array $fileFields = ['thumbnail'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'order' => 'integer',
        'screenshots' => 'array',
        'home_page' => 'boolean',
        'published' => 'boolean'
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }


    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}

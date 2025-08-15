<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use App\Traits\ManagesMultipleFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasDisplayOrder, HasTranslations, ManagesMultipleFileUploads;

    public array $translatable = ['title', 'description'];
    protected $fillable = [
        'title',
        'slug',
        'thumbnail_url',
        'live_url',
        'repo_url',
        'description',
        'start_date',
        'end_date',
        'order',
        'screenshots',
    ];

    protected array $filesFields = ['screenshots'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'order' => 'integer',
        'screenshots' => 'array',
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

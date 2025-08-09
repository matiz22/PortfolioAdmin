<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use App\Traits\ManagesFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Skill extends Model
{
    use HasTranslations, ManagesFileUploads, HasDisplayOrder;

    public array $translatable = ['name'];
    protected $fillable = ['name', 'proficiency_id', 'icon'];
    protected array $fileFields = ['icon'];

    public function proficiency(): BelongsTo
    {
        return $this->belongsTo(Proficiency::class);
    }
}

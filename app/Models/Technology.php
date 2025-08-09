<?php

namespace App\Models;

use App\Traits\ManagesFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Technology extends Model
{
    use ManagesFileUploads;

    protected $fillable = ['name', 'proficiency_id', 'icon'];
    protected array $fileFields = ['icon'];

    public function proficiency(): BelongsTo
    {
        return $this->belongsTo(Proficiency::class);
    }
}

<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use App\Traits\ManagesFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Technology extends Model
{
    use ManagesFileUploads, HasDisplayOrder;

    protected $fillable = ['name', 'proficiency_id', 'icon', 'order'];
    protected array $fileFields = ['icon'];

    public function proficiency(): BelongsTo
    {
        return $this->belongsTo(Proficiency::class);
    }
}

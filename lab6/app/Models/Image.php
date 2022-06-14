<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    public function announcements(): BelongsTo
    {
        return $this->belongsTo(Announcement::class);
    }
}

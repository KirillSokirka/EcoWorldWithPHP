<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Announcement extends Model
{
    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'announcement_id', 'id');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

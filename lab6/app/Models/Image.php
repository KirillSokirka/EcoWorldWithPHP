<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function announcements()
    {
        return $this->belongsTo(Announcement::class);
    }
}

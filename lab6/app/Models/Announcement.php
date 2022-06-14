<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    public function images()
    {
        return $this->hasMany(Image::class, 'announcement_id', 'id');
    }
}

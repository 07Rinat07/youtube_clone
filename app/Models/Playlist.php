<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }

    public function scopeSearch($query, ?string $name)
    {
        return $query->where('name', 'like', "%$name%");

    }
}
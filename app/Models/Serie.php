<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Serie extends Model
{
    use HasFactory;


    public function parts()
    {
        return $this->morphMany(Part::class,'partable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }

    /**
     * Get the catogery that owns the movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catogery(): BelongsTo
    {
        return $this->belongsTo(catogery::class, 'catogery_id', 'id');
    }
    public function favouritables()
    {
        return $this->morphToMany(Favourite::class,'favouritable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    public function movie(): HasMany
    {
        return $this->hasMany(Movie::class);
    }
}

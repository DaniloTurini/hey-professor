<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    /**
     * @return HasMany<vote>
     */
    public function votes(): HasMany
    {
        return $this->hasMany(vote::class);
    }
}

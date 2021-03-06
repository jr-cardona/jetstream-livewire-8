<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Category
 * @property Collection|Course[] $courses
 */
class Category extends Model
{
    use HasFactory;

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}

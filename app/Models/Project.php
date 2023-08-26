<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $name
 * @property-read string $id
 */
class Project extends Model
{
    use HasUlids, HasFactory;

    public $guarded = [
        'id',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}

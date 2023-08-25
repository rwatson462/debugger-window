<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $title
 * @property string $content
 * @property array<string,mixed> $meta
 */
class Post extends Model
{
    use HasUlids, HasFactory;

    protected $guarded = [
        'id',
    ];
}

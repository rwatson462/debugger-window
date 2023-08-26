<?php

namespace App\Models;

use App\Events\PostReceived;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $title
 * @property string $content
 * @property array $tags
 * @property-read Project $project
 * @property string $project_id
 * @property string $headers
 * @property array<string,mixed> $meta
 */
class Post extends Model
{
    use HasUlids, HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'tags' => 'array',
        'headers' => 'json',
    ];

    public static function boot(): void
    {
        parent::boot();

        self::created(function(Post $post) {
            event(new PostReceived($post));
        });
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}

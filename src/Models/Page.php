<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages\Models;

use Awcodes\Curator\Models\Media;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Overtrue\LaravelVersionable\Versionable;
use Overtrue\LaravelVersionable\VersionStrategy;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RectitudeOpen\FilamentInfoPages\Database\Factories\PageFactory;

class Page extends Model
{
    use HasFactory;
    use HasSEO;
    use Sluggable;
    use SoftDeletes;
    use Versionable;

    protected $fillable = ['title', 'slug', 'content', 'status', 'featured_image_id', 'created_at', 'updated_at'];

    protected $versionable = ['title', 'slug', 'content', 'status', 'featured_image_id'];

    protected $versionStrategy = VersionStrategy::SNAPSHOT;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function featured_image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'featured_image_id', 'id');
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function withSlug(Builder $query, string $slug): void
    {
        $query->where('slug', $slug);
    }

    protected static function newFactory()
    {
        return PageFactory::new();
    }
}

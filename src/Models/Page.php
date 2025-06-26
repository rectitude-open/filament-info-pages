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
use Illuminate\Support\Carbon;
use RalphJSmit\Laravel\SEO\Models\SEO;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string $status
 * @property int|null $featured_image_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property Media|null $featured_image
 * @property SEO $seo
 */
class Page extends Model
{
    use HasFactory;
    use HasSEO;
    use Sluggable;
    use SoftDeletes;
    use Versionable;

    protected $with = ['featured_image', 'seo'];

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

    // @phpstan-ignore-next-line
    #[Scope]
    public function active(Builder $query): void
    {
        $query->where('status', 1);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    public function suspended(Builder $query): void
    {
        $query->where('status', 0);
    }

    protected static function newFactory()
    {
        return PageFactory::new();
    }
}

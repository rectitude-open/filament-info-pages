<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages;

use RectitudeOpen\FilamentInfoPages\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class FilamentInfoPages
{
    /**
     * @return class-string<Model>
     */
    public function getPageModel(): string
    {
        return config('filament-info-pages.model', Page::class);
    }

    /**
     * @return Model
     * @throws ModelNotFoundException
     */
    public function getPublishedPageBySlugOrFail(string $slug): Model
    {
        $model = $this->getPageModel();

        return $model::withSlug($slug)
            ->active()
            ->firstOrFail();
    }
}

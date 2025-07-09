<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use RectitudeOpen\FilamentInfoPages\Models\Page;

class FilamentInfoPages
{
    /**
     * @return class-string<Page>
     */
    public function getPageModel(): string
    {
        return config('filament-info-pages.model', Page::class);
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getPublishedPageByIdOrFail(int $id): Page
    {
        $model = $this->getPageModel();

        $page = $model::published()->findOrFail($id);

        assert($page instanceof Page);

        return $page;
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getPublishedPageBySlugOrFail(string $slug): Page
    {
        $model = $this->getPageModel();

        $page = $model::published()->withSlug($slug)->firstOrFail();

        assert($page instanceof Page);

        return $page;
    }
}

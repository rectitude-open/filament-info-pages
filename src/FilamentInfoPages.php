<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use RectitudeOpen\FilamentInfoPages\Models\Page;

class FilamentInfoPages
{
    /**
     * @return class-string<Page>
     */
    public function getModel(): string
    {
        return config('filament-info-pages.model', Page::class);
    }

    public function getPage(int | string $identifier): ?Page
    {
        $query = $this->getModel()::published();

        if (is_numeric($identifier)) {
            $query->where('id', $identifier);
        } else {
            $query->withSlug($identifier);
        }

        $page = $query->first();

        assert($page instanceof Page || is_null($page));

        return $page;
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getPublishedPageByIdOrFail(int $id): Page
    {
        $model = $this->getModel();

        $page = $model::published()->findOrFail($id);

        assert($page instanceof Page);

        return $page;
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getPublishedPageBySlugOrFail(string $slug): Page
    {
        $model = $this->getModel();

        $page = $model::published()->withSlug($slug)->firstOrFail();

        assert($page instanceof Page);

        return $page;
    }

    /**
     * @return Collection<int, Page>
     */
    public function getAllLatestPublishedPages(): Collection
    {
        $pages = $this->getModel()::published()->latest()->get();

        /** @var Collection<int, Page> $pages */
        return $pages;
    }
}

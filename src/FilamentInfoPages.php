<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use RectitudeOpen\FilamentInfoPages\Models\Page;

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
     * @throws ModelNotFoundException
     */
    public function getPublishedPageByIdOrFail(int $id): Model
    {
        $model = $this->getPageModel();

        // @phpstan-ignore-next-line
        return $model::active()->findOrFail($id);
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getPublishedPageBySlugOrFail(string $slug): Model
    {
        $model = $this->getPageModel();

        // @phpstan-ignore-next-line
        return $model::withSlug($slug)->active()->firstOrFail();
    }
}

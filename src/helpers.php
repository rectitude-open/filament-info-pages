<?php

declare(strict_types=1);

use RectitudeOpen\FilamentInfoPages\FilamentInfoPages;
use RectitudeOpen\FilamentInfoPages\Models\Page;

if (! function_exists('info_page')) {
    function info_page(int | string $identifier): ?Page
    {
        $service = app(FilamentInfoPages::class);

        return $service->getPage($identifier);
    }
}

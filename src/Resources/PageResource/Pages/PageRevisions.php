<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages\Resources\PageResource\Pages;

use Mansoor\FilamentVersionable\RevisionsPage;
use RectitudeOpen\FilamentInfoPages\Resources\PageResource;

class PageRevisions extends RevisionsPage
{
    protected static string $resource = PageResource::class;
}

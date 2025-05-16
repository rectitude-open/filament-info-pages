<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages\Resources\PageResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use RectitudeOpen\FilamentInfoPages\Resources\PageResource;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;
}

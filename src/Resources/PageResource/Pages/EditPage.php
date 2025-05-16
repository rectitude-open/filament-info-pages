<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages\Resources\PageResource\Pages;

use Filament\Resources\Pages\EditRecord;
use RectitudeOpen\FilamentInfoPages\Resources\PageResource;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;
}

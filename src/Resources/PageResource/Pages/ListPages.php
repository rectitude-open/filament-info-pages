<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages\Resources\PageResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use RectitudeOpen\FilamentInfoPages\Resources\PageResource;

class ListPages extends ListRecords
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

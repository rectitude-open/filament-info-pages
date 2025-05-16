<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RectitudeOpen\FilamentInfoPages\FilamentInfoPages
 */
class FilamentInfoPages extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RectitudeOpen\FilamentInfoPages\FilamentInfoPages::class;
    }
}

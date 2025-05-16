<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages;

use Filament\Contracts\Plugin;
use Filament\Panel;
use RectitudeOpen\FilamentInfoPages\Resources\PageResource;

class FilamentInfoPagesPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-info-pages';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                config('filament-info-pages.filament_resource', PageResource::class),
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}

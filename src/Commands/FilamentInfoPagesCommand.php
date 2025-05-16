<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages\Commands;

use Illuminate\Console\Command;

class FilamentInfoPagesCommand extends Command
{
    public $signature = 'filament-info-pages';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

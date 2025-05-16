#!/bin/bash
set -e

/home/wwwroot/filament-info-pages/vendor/bin/pest
/home/wwwroot/filament-info-pages/vendor/bin/pint
/home/wwwroot/filament-info-pages/vendor/bin/phpstan analyse

#!/bin/sh
set -e
cd /home/wwwroot/filament-info-pages || exit
chown -R www-data:www-data /home/wwwroot/filament-info-pages && \
find /home/wwwroot/filament-info-pages -type f -exec chmod 644 {} \; && \
find /home/wwwroot/filament-info-pages -type d -exec chmod 755 {} \; && \
chmod -R +x /home/wwwroot/filament-info-pages/vendor/bin/ && \
chmod -R +x /home/wwwroot/filament-info-pages/dev/

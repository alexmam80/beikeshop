# Dockerfile — Laravel pe Render (Nginx + PHP-FPM + Composer + Node)
FROM webdevops/php-nginx:8.3-alpine

# Composer din imaginea oficială
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
ENV WEB_DOCUMENT_ROOT=/app/public \
    PHP_DISPLAY_ERRORS=0 \
    PHP_MEMORY_LIMIT=256M \
    PHP_POST_MAX_SIZE=32M \
    PHP_UPLOAD_MAX_FILESIZE=32M

# Unele build-uri au nevoie de git, node și npm (pentru Vite/laravel-mix)
RUN apk add --no-cache git nodejs npm

# 1) Instalăm mai întâi dependențele PHP (cache mai bun în build)
COPY composer.json composer.lock /app/
RUN composer install --no-dev --prefer-dist --no-progress --no-interaction --no-scripts

# 2) Copiem restul codului
COPY . /app

# 3) Optimizăm autoload
RUN composer dump-autoload -o

# 4) Build front-end:
# - pentru Vite => npm run build
# - pentru laravel-mix => npm run prod sau npm run production
# Comanda încearcă în ordine și nu oprește build-ul dacă scriptul nu există.
RUN npm ci || npm install \
 && (npm run build || npm run prod || npm run production || true)

# 5) Setări Laravel
RUN chown -R application:application storage bootstrap/cache \
 && php -r "file_exists('.env') || copy('.env.example', '.env');" \
 && php artisan key:generate \
 && php artisan storage:link \
 && php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:cache

FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    && docker-php-ext-install pdo pdo_mysql zip intl

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy project
COPY . .

# Copy env example (jika .env belum ada)
RUN php -r "file_exists('.env') || copy('.env.example', '.env');"

# Install dependencies
RUN composer install --optimize-autoloader --no-dev

# Generate key (kalau APP_KEY dari Railway maka tidak overwrite)
RUN php artisan key:generate --force

# Storage link
RUN php artisan storage:link || true

# Optimize
RUN php artisan config:cache || true
RUN php artisan route:cache || true
RUN php artisan view:cache || true

# Start Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT}"]

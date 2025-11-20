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

# Set working directory
WORKDIR /var/www/html

# Copy project
COPY . .

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

# Storage link
RUN php artisan storage:link || true

# Optimize
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]

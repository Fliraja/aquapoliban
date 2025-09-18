# ========== Build Stage ==========
FROM php:8.2-fpm AS builder

RUN apt update && apt install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libpq-dev \
    && apt clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql pdo_pgsql pgsql mbstring exif pcntl bcmath gd zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# Install composer dependencies (include dev for debugging)
RUN composer install  --optimize-autoloader

# ========== Runtime Stage ==========
FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    nginx \
    supervisor \
    git \
    curl \
    libpng \
    libxml2 \
    zlib \
    libzip \
    oniguruma \
    libpq \
    && apk add --no-cache --virtual .build-deps \
    $PHPIZE_DEPS \
    libpng-dev \
    libxml2-dev \
    zlib-dev \
    libzip-dev \
    oniguruma-dev \
    postgresql-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql pgsql mbstring exif pcntl bcmath gd zip \
    && apk del .build-deps

WORKDIR /var/www

COPY --from=builder /var/www /var/www
COPY --from=builder /usr/bin/composer /usr/bin/composer

COPY docker-compose/nginx/nginx.conf /etc/nginx/nginx.conf
COPY docker-compose/nginx/default.conf /etc/nginx/conf.d/default.conf
COPY docker-compose/supervisord.conf /etc/supervisord.conf

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/vendor

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]

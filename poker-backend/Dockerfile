FROM php:8.2-fpm

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    libpq-dev \
    libzip-dev \
    libjpeg-dev \
    libpng-dev \
    libonig-dev \
    && docker-php-ext-install pdo_mysql opcache bcmath exif gd sockets

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Expose port for PHP-FPM
EXPOSE 9000
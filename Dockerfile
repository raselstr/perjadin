FROM php:7.4-fpm

# Install dependensi
RUN apt-get update && apt-get install -y \
    zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev libicu-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip intl

# Set working directory
WORKDIR /var/www/html

# Copy hanya folder yang dibutuhkan
COPY ./ /var/www/html


# Set permission folder writable
RUN chown -R www-data:www-data /var/www/html/writable \
    && chmod -R 775 /var/www/html/writable

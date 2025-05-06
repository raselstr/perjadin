FROM php:8.2-apache

RUN docker-php-ext-install mysqli

# Install ekstensi PHP yang dibutuhkan
RUN apt-get update && apt-get install -y \
    zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev libicu-dev \
    && docker-php-ext-install pdo pdo_mysql zip intl

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Salin kode CodeIgniter ke dalam container
COPY ../../app /var/www/html/

# Set permission
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Konfigurasi Apache
COPY ../../nginx/default.conf /etc/apache2/sites-available/000-default.conf



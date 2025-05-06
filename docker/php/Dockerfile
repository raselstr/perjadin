FROM php:7.4-apache

# Install dependensi
RUN apt-get update && apt-get install -y \
    zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev libicu-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip intl

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Salin seluruh isi root proyek ke dalam container
COPY ../../ /var/www/html/

# Set permission folder writable (pastikan folder ini sudah ada di root proyek)
RUN chown -R www-data:www-data /var/www/html/writable \
    && chmod -R 775 /var/www/html/writable

# Ganti konfigurasi Apache
COPY ../../nginx/default.conf /etc/apache2/sites-available/000-default.conf

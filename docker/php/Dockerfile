FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev libicu-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip intl

RUN a2enmod rewrite

COPY ../../app /var/www/html/

RUN chown -R www-data:www-data /var/www/html/writable \
    && chmod -R 775 /var/www/html/writable

COPY ../../nginx/default.conf /etc/apache2/sites-available/000-default.conf

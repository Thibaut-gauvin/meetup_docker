FROM php:7.1-fpm

# Install packages
RUN apt-get update \
    && apt-get install -y \
        libicu-dev \
        zlib1g-dev

# Install mysql php driver
RUN docker-php-ext-install \
        mysqli \
        pdo_mysql

## Install xdebug extention
#RUN pecl install xdebug \
#    && docker-php-ext-enable xdebug

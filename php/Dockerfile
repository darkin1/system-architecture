FROM php:7.2-fpm-alpine3.9
MAINTAINER Dariusz Ciesielski <dariusz@lifeofcto.pl>

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Mysql Driver
RUN docker-php-ext-install pdo pdo_mysql

# Install Zip extension
RUN apk add zlib-dev && \
    docker-php-ext-install zip
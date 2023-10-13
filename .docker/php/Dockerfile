ARG PHP_VERSION=8.2

FROM php:${PHP_VERSION}-apache

# Install PHP dependencies
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions pdo_pgsql intl

WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --disable-tls

RUN echo 'memory_limit = 512M' >> /usr/local/etc/php/php.ini-development
RUN ln -s /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

ARG PHP_VERSION=8.2

FROM php:${PHP_VERSION}-fpm

RUN apt-get update && apt-get install -y freetype* build-essential zlib1g-dev g++ git libpq-dev libicu-dev zip libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev libonig-dev locales zsh wget curl vim jpegoptim optipng pngquant gifsicle nodejs npm yarn \
    && docker-php-ext-install intl opcache pdo pdo_mysql pdo_pgsql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN apt-get update \
    && apt-get install -y libxml2-dev libcurl4-openssl-dev \
    pkg-config libssl-dev

RUN docker-php-ext-configure gd --enable-gd --prefix=/usr --with-jpeg --with-freetype \
    && docker-php-ext-install -j$(nproc) gd

RUN php -r 'var_dump(gd_info());'

RUN npm install --global yarn

WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN ln -s /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini
RUN wget https://get.symfony.com/cli/installer -O - | bash

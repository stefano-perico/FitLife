ARG PHP_VERSION=8.2

FROM php:${PHP_VERSION}-apache

RUN a2enmod rewrite

# Install PHP dependencies
RUN apt-get update && apt-get install -y freetype* build-essential zlib1g-dev g++ git libpq-dev libicu-dev zip libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev libonig-dev locales zsh wget curl vim jpegoptim optipng pngquant gifsicle nodejs npm yarn \
    && docker-php-ext-install intl opcache pdo pdo_pgsql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN apt-get update \
    && apt-get install -y libxml2-dev libcurl4-openssl-dev \
    pkg-config libssl-dev

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --disable-tls

# Install Node.js
RUN apt update && apt install -yqq nodejs npm

# Install Symfony-cli
RUN curl -sS https://get.symfony.com/cli/installer | bash && \
    mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

# Copy application files

# Copy Apache configuration
COPY ./apache.conf /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www/html

ENTRYPOINT ["bash", ".docker/docker.sh"]

CMD ["apache2-foreground"]

# Expose port 80 and start Apache
EXPOSE 80
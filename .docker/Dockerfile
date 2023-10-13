ARG PHP_VERSION=8.2

FROM php:${PHP_VERSION}-apache

# Install PHP dependencies
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions pdo_pgsql intl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --disable-tls

# Install Node.js
RUN apt update && apt install -yqq nodejs npm

# Install Symfony-cli
RUN curl -sS https://get.symfony.com/cli/installer | bash && \
    mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

RUN ls
# Copy application files
COPY . /var/www/

# Copy Apache configuration
COPY ./apache.conf /etc/apache2/sites-available/000-default.conf

# Install Symfony composer dependencies
RUN cd /var/www
RUN composer install --optimize-autoloader --no-interaction

# Set working directory
WORKDIR /var/www

# Execute script docker.sh
ENTRYPOINT ["bash", ".docker/docker.sh"]

# Expose port 80 and start Apache
EXPOSE 80
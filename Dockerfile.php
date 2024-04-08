# Use Alpine Linux as the base image for PHP
FROM php:8.2-fpm-alpine

# Install necessary packages for PHP extensions and build tools
RUN apk update && \
    apk add --no-cache \
        libzip-dev \
        zip \
        unzip \
        imagemagick-dev \
        autoconf \
        build-base \
        freetype-dev \
        libjpeg-turbo-dev \
        libpng-dev \
        && docker-php-ext-install pdo_mysql zip gd \
        && pecl install imagick \
        && docker-php-ext-enable imagick \
        && apk del build-base autoconf


# Set the working directory
WORKDIR /var/www/html

# Copy composer files and install dependencies
COPY composer.json composer.lock ./
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-scripts --no-autoloader

# Copy the rest of the application
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]

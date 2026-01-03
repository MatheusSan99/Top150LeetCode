FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    bash \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    oniguruma-dev \
    libxml2-dev \
    gcc \
    make \
    autoconf \
    g++ \
    linux-headers

RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd

RUN pecl install xdebug \
 && docker-php-ext-enable xdebug

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN cp php/php.ini-development /usr/local/etc/php/php.ini

RUN git config --system --add safe.directory /var/www/html

EXPOSE 9000
CMD ["php-fpm"]

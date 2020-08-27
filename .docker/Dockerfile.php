FROM pandabox/cli as cli
FROM php:7.4-fpm-alpine

RUN apk add --no-cache \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd bcmath pdo_mysql \
    && docker-php-ext-enable pdo_mysql

COPY --from=cli /app /app

WORKDIR /app

ENV WEBROOT=web
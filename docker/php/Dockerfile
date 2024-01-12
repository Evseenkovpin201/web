FROM php:8.1-fpm-alpine

WORKDIR /var/www

# Устанавливанием необходимые пакеты
RUN apk update && apk add --no-cache \
    shadow \
    libpq-dev \
    libzip-dev \
    icu-dev \
    libjpeg-turbo-dev libpng-dev freetype-dev \
    autoconf \
    gcc make g++ zlib-dev

# Устанавливанием bash
RUN apk add --no-cache bash
RUN sed -i 's/bin\/ash/bin\/bash/g' /etc/passwd

# Устанавливаем необходимые php расширения
RUN docker-php-ext-install pgsql \
  && docker-php-ext-install pdo_pgsql \
  && docker-php-ext-install intl \
  && docker-php-ext-install zip \
  && docker-php-ext-install exif \
  && docker-php-ext-install opcache \
  && docker-php-source delete

# PHP ext-gd
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd \
  && docker-php-source delete

# Устанавливаем composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Создаём пользователя и группу www для приложения Laravel
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Меняем пользователя на www
USER www

# В контейнере открываем 9000 порт и запускаем php-fpm
EXPOSE 9000
CMD ["php-fpm"]

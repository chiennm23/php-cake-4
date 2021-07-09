ARG PHP_VERSION

FROM php:7.3-fpm

RUN apt-get update && apt-get install -y \
      libicu-dev \
      libpq-dev \
      libmcrypt-dev \
      zlib1g-dev \
      libzip-dev \
      libmagickwand-dev --no-install-recommends \
    && rm -r /var/lib/apt/lists/* \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && pecl install mcrypt-1.0.2 \
    && docker-php-ext-enable mcrypt \
    && docker-php-ext-install \
      intl \
      mbstring \
      pcntl \
      pdo_mysql \
      pdo_pgsql \
      pgsql \
      zip \
      opcache

RUN apt-get update --fix-missing
RUN apt-get install -y curl
RUN apt-get install -y build-essential libssl-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd

RUN usermod -u 1000 www-data

RUN echo "=====INSTALL COMPOSER====="
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
RUN echo "=====INSTALL COMPOSER COMPLETED====="

WORKDIR /var/www
COPY ./run.sh /run.sh
RUN chmod a+x /run.sh

ENTRYPOINT ["/run.sh"]

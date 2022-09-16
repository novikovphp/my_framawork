# Накатываем образ из Docker Hub
FROM php:8-apache
# Добавляем расширение mysqli в php
RUN docker-php-ext-install mysqli
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN a2enmod rewrite
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer \


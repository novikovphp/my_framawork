# Накатываем образ из Docker Hub
FROM php:8.1-fpm
# Добавляем расширение mysqli в php
RUN docker-php-ext-install mysqli
FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

EXPOSE 80
FROM php:8.2-rc-apache
LABEL MAINTAINER "Susano team"
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli \
    && apt-get update && apt-get upgrade -y
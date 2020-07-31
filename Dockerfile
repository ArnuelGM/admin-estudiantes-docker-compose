FROM php:7.4

RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli

WORKDIR /var/www/html

EXPOSE 8080

CMD [ "php", "-S", "0.0.0.0:8080", "-t", "." ]

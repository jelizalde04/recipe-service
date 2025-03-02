FROM php:8.1-apache
WORKDIR /var/www/html
COPY . .
RUN docker-php-ext-install mysqli
EXPOSE 4004
CMD ["php", "-S", "0.0.0.0:4004", "-t", "src"]

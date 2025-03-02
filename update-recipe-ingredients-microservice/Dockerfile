FROM php:8.1-apache
WORKDIR /var/www/html
COPY . .
RUN docker-php-ext-install mysqli
EXPOSE 4003
CMD ["php", "-S", "0.0.0.0:4003", "-t", "src"]

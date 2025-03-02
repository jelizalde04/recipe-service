FROM php:8.1-apache
WORKDIR /var/www/html
COPY . .
RUN docker-php-ext-install mysqli
EXPOSE 4009
CMD ["php", "-S", "0.0.0.0:4009", "-t", "src"]

FROM php:8.1-cli

WORKDIR /app

COPY . /app

RUN docker-php-ext-install sockets

CMD ["php", "main.php"]

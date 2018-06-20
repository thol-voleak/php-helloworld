FROM php:7.0-cli
COPY . /var/www/html
WORKDIR /var/www/html
CMD [ "php", "./index.php" ]

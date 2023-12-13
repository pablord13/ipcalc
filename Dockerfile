FROM php:8.2-apache
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update -y
RUN apt-get install -y zip
RUN apt-get install -y unzip
WORKDIR /usr/local/bin/phpunit9
RUN composer require --dev phpunit/phpunit:^9
RUN ln -s /usr/local/bin/phpunit9/vendor/bin/phpunit /usr/local/bin/phpunit
WORKDIR /var/www/html


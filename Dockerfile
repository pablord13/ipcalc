FROM php:8.2-apache 
COPY app /var/www/html
WORKDIR /var/www/html
EXPOSE 80


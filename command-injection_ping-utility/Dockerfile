FROM php:7.4-apache

RUN apt-get update && apt-get install -y iputils-ping

COPY index.php /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]

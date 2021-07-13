# Dockerfile
FROM php:7.4-apache
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY start-apache /usr/local/bin

#requires Apache’s mod_rewrite plugin to be enabled,
RUN a2enmod rewrite

#To get the source files inside the container, we can use the COPY command again:
COPY ./ /var/www/
RUN chown -R www-data:www-data /var/www

CMD ["start-apache"]


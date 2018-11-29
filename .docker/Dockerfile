FROM phpstorm/php-71-apache-xdebug

MAINTAINER Ronny Lindner

COPY . /
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data . \
    && a2enmod rewrite
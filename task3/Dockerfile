FROM phusion/baseimage:0.9.9

ENV \
  APP_DIR="/app" \
  APP_PORT="8000"

# the "app" directory (relative to Dockerfile) containers your Laravel app...
COPY app/ $APP_DIR

# INSTALL PHP
RUN apt-get update
RUN apt-get install -y vim curl wget build-essential python-software-properties
RUN add-apt-repository -y ppa:ondrej/php5
RUN apt-get update
RUN apt-get install -y php5-cli php5-fpm php5-redis php5-pgsql php5-sqlite php5-curl\
		       php5-gd php5-mcrypt php5-intl php5-imap php5-tidy

# Enable php mcrypt module
RUN php5enmod mcrypt

# INSTALL COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- \
  --install-dir=/usr/bin --filename=composer

# INSTALL LARAVEL
RUN composer create-project laravel/laravel /var/www --prefer-source
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www

# Add Laravel config
ADD config/database.php /var/www/config/database.php

# EXPOSE THE PORT
EXPOSE 8000

RUN cd /var/www/
CMD php artisan serve --host=0.0.0.0 --port=$APP_PORT


# ideas: https://gist.github.com/briceburg/fd875a6e4e339fe48607
# https://hub.docker.com/r/joeniland/nginx-php-laravel/~/dockerfile/

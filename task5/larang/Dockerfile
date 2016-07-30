# base image
# includes ubuntu and ssh server
FROM phusion/baseimage:0.9.9

# environment variable
ENV \
  APP_DIR="/app" \
  APP_PORT="8000"

COPY app/ $APP_DIR

# INSTALL PHP
RUN apt-get update
RUN apt-get install -y vim curl wget build-essential python-software-properties
RUN add-apt-repository -y ppa:ondrej/php5
RUN apt-get update
RUN apt-get install -y php5-cli php5-fpm php5-redis php5-pgsql php5-sqlite php5-curl\
		       php5-gd php5-mcrypt php5-intl php5-imap php5-tidy
RUN php5enmod mcrypt
RUN curl -sS https://getcomposer.org/installer | php -- \
  --install-dir=/usr/bin --filename=composer
RUN composer create-project laravel/laravel /var/www --prefer-source
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www

# install our dependencies and nodejs
RUN echo "deb http://archive.ubuntu.com/ubuntu precise main universe" > /etc/apt/sources.list
RUN apt-get update
RUN apt-get -y install python-software-properties git build-essential
RUN add-apt-repository -y ppa:chris-lea/node.js
RUN apt-get update
RUN apt-get -y install nodejs

ADD config/database.php /var/www/config/database.php
ADD package.json $APP_DIR

# EXPOSE THE PORT
EXPOSE 8000

RUN which php
WORKDIR /var/www/app/
CMD php artisan serve --host=0.0.0.0 --port=$APP_PORT &

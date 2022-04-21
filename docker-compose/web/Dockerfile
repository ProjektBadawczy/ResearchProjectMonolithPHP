FROM php:8.0.10-apache
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite
RUN a2dismod mpm_event
RUN service apache2 restart
#RUN apt update
#RUN apt install -y software-properties-common \
#apt-transport-https \
#ca-certificates \
#curl

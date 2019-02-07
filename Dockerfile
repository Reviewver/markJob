FROM debian:stable
MAINTAINER Simon Hemery <simon.hemery.56350@gmail.com>
RUN apt-get update \
&& apt-get install -y \
apache2 \
libapache2-mod-php \
php \
php-mysql
EXPOSE 80
RUN rm /var/www/html/index.html
ADD . /var/www/html/
CMD ["/usr/sbin/apache2ctl","-D","FOREGROUND"]

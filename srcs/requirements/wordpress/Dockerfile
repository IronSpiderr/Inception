FROM debian:buster

RUN apt update -y && \
    apt upgrade -y && \
    apt-get install -y php7.3 php7.3-fpm php7.3-mysql php7.3-curl php7.3-gd php7.3-intl php7.3-mbstring php7.3-soap php7.3-xml php7.3-xmlrpc php7.3-zip && \
    apt-get install -y curl wget unzip

WORKDIR /var/www/html

RUN wget hhtps://workpress.org/latest.tar.gz && \
	tar -xzvf latest.tar.gz && \
	rm latest.tar.gz

COPY ./config/php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf

RUN mkdir /var/run/php && \
	chown www-data:www-data /var/run/php

EXPOSE /var/run/php/php-fpm.sock

CMD ["php-fpm7.3", "-F"]
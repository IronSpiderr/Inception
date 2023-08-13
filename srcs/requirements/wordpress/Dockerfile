FROM alpine:3.17

RUN apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y php7.3 php7.3-fpm php7.3-mysql php7.3-curl php7.3-gd php7.3-intl php7.3-mbstring php7.3-soap php7.3-xml php7.3-xmlrpc php7.3-zip && \
    apt-get install -y curl net-tools mariadb-client sendmail && \
    apt-get install -y moreutils gettext

RUN mkdir -p /run/php

RUN sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g' /etc/php/7.3/fpm/php.ini
RUN sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/g' /etc/php/7.3/fpm/pool.d/www.conf

# COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
# COPY ./conf/wp-config.php /var/www/

EXPOSE 9000

COPY ./tools /var/www/

RUN chmod +x /var/www/my_wordpress.sh
RUN chmod +x /var/www/wordpress_init.sh

ENTRYPOINT ["/var/www/my_wordpress.sh"]

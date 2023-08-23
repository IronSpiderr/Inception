FROM alpine:3.17

ARG PHP_VERSION=81

RUN apk update && apk upgrade && apk add --no-cache \
    php${PHP_VERSION} \
    php${PHP_VERSION}-fpm \
    php${PHP_VERSION}-mysqli \
    php${PHP_VERSION}-json \
    php${PHP_VERSION}-curl \
    php${PHP_VERSION}-dom \
    php${PHP_VERSION}-exif \
    php${PHP_VERSION}-fileinfo \
    php${PHP_VERSION}-mbstring \
    php${PHP_VERSION}-openssl \
    php${PHP_VERSION}-xml \
    php${PHP_VERSION}-zip \
    php${PHP_VERSION}-phar \
    wget \
    mariadb-client

COPY ./conf/wp-myconfig.sh /home/wp-myconfig.sh
RUN chmod +x /home/wp-myconfig.sh

EXPOSE 9000

WORKDIR /home

CMD ["sh", "wp-myconfig.sh"]
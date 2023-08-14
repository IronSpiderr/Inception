FROM alpine:3.17
RUN apk update && \
    apk upgrade && \
	apk add --no-cache mariadb mysql-client gettext 

RUN mkdir -p /run/mysqld; \
	chmod 777 /var/run/mysqld; \

ENV TERM xterm

COPY ./conf/mariadb.conf /etc/mysql/mariadb.d/
COPY ./tools/init.sql /

# EXPOSE 3306

COPY tools/my_mariadb.sh /
RUN chmod +x /my_mariadb.sh

ENTRYPOINT ["sh", "my_mariadb.sh"]
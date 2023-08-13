FROM alpine:3.17
RUN apk update && \
    apk upgrade && \
	apk add mariadb

# RUN mkdir -p /run/mysqld
# RUN chown -R mysql:mysql /run/mysqld

# ENV TERM xterm

# COPY ./conf/mariadb.conf /etc/mysql/mariadb.d/
# COPY ./tools/init.sql /

EXPOSE 3306

COPY tools/my_mariadb.sh /
RUN chmod +x /my_mariadb.sh

ENTRYPOINT ["/my_mariadb.sh"]
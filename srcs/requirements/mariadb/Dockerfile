FROM debian:buster

RUN apt-get update -y && \
    apt-get upgrade -y && \
	apt-get install -y mariadb-server moreutils gettext

RUN mkdir -p /run/mysqld
RUN chown -R mysql:mysql /run/mysqld

COPY ./conf/mariadb.conf /etc/mysql/mariadb.d/
COPY ./tools/init.sql /

EXPOSE 3306

COPY tools/my_mariadb.sh /
RUN chmod +x /my_mariadb.sh

ENTRYPOINT ["/my_mariadb.sh"]

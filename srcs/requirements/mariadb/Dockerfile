FROM alpine:3.17
RUN apk update && \
    apk upgrade && \
	apk add --no-cache mariadb mariadb-client

# RUN mkdir /var/run/mysqld; \
#     chmod 777 /var/run/mysqld; \
#     { echo '[mysqld]'; \
#       echo 'skip-host-cache'; \
#       echo 'skip-name-resolve'; \
#       echo 'bind-address=0.0.0.0'; \
#     } | tee  /etc/my.cnf.d/docker.cnf; \
#     sed -i "s|skip-networking|skip-networking=0|g" \
#       /etc/my.cnf.d/mariadb-server.cnf

# COPY ./conf/mariadb.conf /etc/mysql/mariadb.d/
# COPY ./tools/init.sql /

# EXPOSE 3306

COPY tools/my_mariadb.sh /
RUN chmod +x /my_mariadb.sh

ENTRYPOINT ["sh", "my_mariadb.sh"]
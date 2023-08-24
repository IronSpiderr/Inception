FROM alpine:3.17

RUN apk update && apk add --no-cache mariadb mariadb-client

COPY ./conf/db_creation.sh /home/db_creation.sh
RUN chmod +x /home/db_creation.sh

EXPOSE 3306

WORKDIR /home

CMD ["sh", "db_creation.sh"]
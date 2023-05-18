FROM debian:buster

# Mise à jour du système et installation de MariaDB
RUN apt update -y && \
    apt upgrade -y && \
	apt install -y mariadb-server

# Copie du fichier de configuration personnalisé
COPY ./conf/mariadb.conf /etc/mysql/my.cnf

# Exposition du port MySQL
EXPOSE 3306

# Commande par défaut pour démarrer MariaDB
CMD ["mysqld"]
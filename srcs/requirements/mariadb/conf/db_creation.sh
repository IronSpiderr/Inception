#!bin/sh

if [ ! -d "/run/mysqld" ]; then
	mkdir -p /run/mysqld
	chown -R mysql:mysql /run/mysqld
fi

if [ ! -d "/var/lib/mysql/mysql" ]; then
	mysql_install_db --user=mysql --datadir=/var/lib/mysql > /dev/null 2>&1
	chown -R mysql:mysql /var/lib/mysql
fi

sed -i "s|skip-networking|# skip-networking|g" /etc/my.cnf.d/mariadb-server.cnf

echo "CREATE DATABASE IF NOT EXISTS $DB_NAME;" > db.sql
echo "CREATE USER IF NOT EXISTS $DB_USER@'%' IDENTIFIED BY '$DB_PASS';" >> db.sql
echo "GRANT ALL PRIVILEGES ON $DB_NAME.* TO $DB_USER@'%';" >> db.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$DB_ROOT';" >> db.sql
echo "FLUSH PRIVILEGES ;" >> db.sql

# Starts the server in daemon mode by executing the sql file
mysqld --bind-address 0.0.0.0 --user=mysql --init-file=/home/db.sql
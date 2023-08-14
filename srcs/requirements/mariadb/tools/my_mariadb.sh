#!/bin/bash
cat init.sql | envsubst > database.sql
cat database.sql
rm init.sql

# Démarrer le serveur MariaDB en arrière-plan
# mysqld --user=mysql --bind-address=0.0.0.0 --init-file=/database.sql &

mysql -u root -p < database.sql
# Attendre que le serveur MariaDB soit prêt
sleep 5

# Afficher les informations sur la base de données

# rm database.sql

tail -f /dev/null

echo "Heelo world!"
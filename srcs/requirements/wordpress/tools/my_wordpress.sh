#!/bin/bash

# envsubst < /var/www/wp-config.php | sponge /var/www/wp-config.php
envsubst < /var/www/wordpress_init.sh | sponge /var/www/wordpress_init.sh

if [ ! -f /var/www/html/wp-config.php ]; then
    /var/www/wordpress_init.sh
fi

php-fpm7.3 -F
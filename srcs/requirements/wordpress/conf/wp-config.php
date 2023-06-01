<?php
/**
 * Configuration de base de WordPress.
 *
 * Ce fichier contient les configurations suivantes : réglages MySQL, clés secrètes,
 * préfixe de table, langue utilisée, et ABSPATH. Vous pouvez en savoir plus
 * en visitant le lien {@link https://fr.wordpress.org/support/article/editing-wp-config-php/}.
 * Ces réglages sont utilisés par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas besoin d'utiliser l'assistant
 * d'installation. Vous voudrez peut-être consulter le fichier wp-config-sample.php
 * pour obtenir de plus amples informations.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Vous pouvez obtenir ces informations auprès de votre hébergeur ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', '${DB_NAME}');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', '${DB_USER}');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '${DB_PASSWORD}');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', '${DB_HOST}');

/** Jeu de caractères utilisé par la base de données. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. N'y touchez que si vous savez ce que vous faites. */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d'authentification et de salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases à l'aide du {@link https://api.wordpress.org/secret-key/1.1/salt/ service de clés secrètes de WordPress.org}
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants. Cela forcera également
 * tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{<fXkQ7,Gn9%MP&;J7Vc~|_wDB,:,A91+^ul9,}C4l+8mG.6,=je|J`hwpvO?E/|');
define('SECURE_AUTH_KEY',  '(1bkbx/eFn4)VwblFX+@-75=o+@-4K1`,mS9$-+Y{3FmlVXTu6g2/l_&[x,j6*^4');
define('LOGGED_IN_KEY',    'yzQlqU;!tt~E0RTTZ_P<c9<^r Fy7rHmCFXk.EdL31}r6&nFEhf)%*?ASy1qvNJl');
define('NONCE_KEY',        '7CyV+GjNt1++rk l!3^#*03In(GlMpE|+WRK3I>[QWoy]9&p*:5[F%i9XCu=p~}4');
define('AUTH_SALT',        'g3#VTmxYz|2*#>J^trL&a3UPkB*i|S<fTf_B5.#5-4z|7vV.#A,%x?/RU8u!N@3S');
define('SECURE_AUTH_SALT', '{Lwkxj GoW?X8pM$UP 9R=b9^+=~B( bsHq`{XQ9)4:h|:N>6fZGzO.m9*|OjC3Z');
define('LOGGED_IN_SALT',   'l8`|)TKZIGYL7kPENb.:$O)*?-`]Fyn--+7kd=R^,=q+z.xgA7}Xxxn+SAt8vLUf');
define('NONCE_SALT',       'Hxf|/||R7++H;vj:DuH0~%>++Vc+2-MhF(5im3!>2iSe3+}>hRp?<Q9,k-1=?%Sc');

/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacun un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode débogage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemement recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le débogage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

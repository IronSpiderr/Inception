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
define('DB_NAME', 'votre_base_de_donnees');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'votre_utilisateur');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'votre_mot_de_passe');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'votre_phrase_unique');
define('SECURE_AUTH_KEY',  'votre_phrase_unique');
define('LOGGED_IN_KEY',    'votre_phrase_unique');
define('NONCE_KEY',        'votre_phrase_unique');
define('AUTH_SALT',        'votre_phrase_unique');
define('SECURE_AUTH_SALT', 'votre_phrase_unique');
define('LOGGED_IN_SALT',   'votre_phrase_unique');
define('NONCE_SALT',       'votre_phrase_unique');

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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

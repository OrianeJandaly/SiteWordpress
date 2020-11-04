<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qyR^V?EN|D6f6&o&>XRYP930j_&#T9zNM:`Z}L5qw9z:oM<;_|q_=P.::dLw0|(M' );
define( 'SECURE_AUTH_KEY',  'hs&:Ik|NJI:Gm(#|qvCJ(IC.4z`bqTX{/aB=TknD&|rC_ac!K5rNG<?oJ[zW8! b' );
define( 'LOGGED_IN_KEY',    '7W#<;UnW?%hD1b%}pE9^zU]]miTt4],FtZ{S!0LIgg^g:FH0bB$?,nY[!%AQl@G]' );
define( 'NONCE_KEY',        '+mhUm^/?L^.4Ar,Idw.Z}yAe ydd4E;Dj}V^,^Q&&DI-L]Ha4Fe>$v<L6OJ7ql$j' );
define( 'AUTH_SALT',        'fGDwjIbsuYko&#;/?$U]V?(H65KLNz84w(OlTS4!s>H[Uge],mGF qRN3pO5Y{jX' );
define( 'SECURE_AUTH_SALT', 'tqdQfMDv:_>`eq,Er[d(<&I5hPCJMz>o~F`&2S:ZcCOf#ZW5ghxXXK#6Kr~4;3uR' );
define( 'LOGGED_IN_SALT',   '`9nLMNayhoM<qCo}jkcF[}u;FZpkp^RBU%trna*+;51IU;JOfW+U@qY<Y2:lL<7_' );
define( 'NONCE_SALT',       'ox^ztf2OU~.PTV:s&^hQ@f=#?8;U:WpeZ@I74t IsGxtXBm-fty/B8 OHa4ef#8T' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

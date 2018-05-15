<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpress_admin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Test1234');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '127.0.0.1');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y^iS^o~OR]q&@dWfC>@}FcS.eG<o/i$>^i6kx8oy6]Ch](qA6v0UKycZWUU{M,`?');
define('SECURE_AUTH_KEY',  'OAPv!*,e=5He8(#_?M|_+n[:|,YTnLgOwY (YLJlS7.S {JNb/~$m!.]nbTRU[q=');
define('LOGGED_IN_KEY',    ')FWs^?%!q@53%2|SjPmh@$[#NmK,,Ap/3PHXrD/!z}4A.$DDWfHpFO+!</P?qW/O');
define('NONCE_KEY',        'tivMA:ZP.W,-ZB/86qVG6x]oxWDE@+3EXo(@AG[N5RPwG9@|m#q<+D,UqlVQN%a)');
define('AUTH_SALT',        ',&m6-RnMx!`z#xh[O8_dI,+ zlD`t$67mbe>F,kJ${8B>]S,.{_~*>e$E{-YN63k');
define('SECURE_AUTH_SALT', '0dVl+X/3t*qh@R)B3a>`#sNcZ7bO*taJUU~*/FiZI.0_38!VVb}Z9/ZV-D32HnWR');
define('LOGGED_IN_SALT',   '4X][J+R:yq4uPD_xD[K+G{o5%p8F*]Y$ya$TKD_:4xCDq. z%pkjLY,tT%e++oXJ');
define('NONCE_SALT',       ' =bqPMR=hI&X%J4I(APvH$Q1X33v6T/=vz.YC)*R-W}Fj7NcAEgv[-YM>@mX^!~!');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');

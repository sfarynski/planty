<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'RB[v{}=U4-)$RtwEKyL;0S)3l]9>aY/fn6hF^P5m1%k(.d0mBZ6SWva&{>Z17`^A' );
define( 'SECURE_AUTH_KEY',  'O#PE6UkS[HEz0)GHtYuG6?tOe3Jjfpkp4%08^8On/lqKjyD[TD c{M[w^up)$hKc' );
define( 'LOGGED_IN_KEY',    '1c=RU+6Yf8;bQ$_/}~F1BO k,{N>FI}5@%e?E=4 JA#`Zf!!i`}Y+)D4shh(jW+<' );
define( 'NONCE_KEY',        ' CFAI-$(w;kUO`+ueVeoYX^N/ep^ld>)0z{hz#%[Di*%ASZB{zIorD*VyZ!vT:oB' );
define( 'AUTH_SALT',        'uuV7{t>nmIIP#mL-^7H-#ZRR-X3:0.v15M.sLb%c@3rZDdgIT1@Rq.N nBVvh1F%' );
define( 'SECURE_AUTH_SALT', 'K?woX12lj)$a?z^W!$iz4r]!m|naI7*U8q3i>@<E{WRgRF+_$?Mqq?eRh(Z@J!A-' );
define( 'LOGGED_IN_SALT',   'vU).d+hIdJV %9]FM[8]h7`4RE!8l<S#$:?Zc}c#ivk]Z(0jH9(uU*e0iLq&-S6I' );
define( 'NONCE_SALT',       '*%E6-[v#Ez}iO`YJjG[I8DGLVqfkRly 8G5-J3_MB,C27j)Vu @=u7U`wuKLnHL9' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

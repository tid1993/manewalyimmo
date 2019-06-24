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
define( 'DB_NAME', 'saimmo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '1993' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pFQm@M,J.Gj,ogt5IyfI/j<W{B7_{vPM]O57)HAXA2^ |J<4jw^rWH:Rls+=!rq8' );
define( 'SECURE_AUTH_KEY',  'lc*+-Tp837;_~Tpl$, 9 -b=geH,uhr]I^YZD&uZvzmxja1UhIM.JGKbn6Rf$|5e' );
define( 'LOGGED_IN_KEY',    'L;CkR0 {Mg`9LJa@ha6!)[Uw?v RqSvC|NgB@;iW%sMnL%Sw9`Zl_Y*^Vvr,4R5I' );
define( 'NONCE_KEY',        '>OToi^v0A_!zu!)C81H~4W;2&NTtYE6I=G%btYTEEe7Y0e,MnD(A05tp_O/Rl[oL' );
define( 'AUTH_SALT',        '+srx[]Uw-:}!e&200~vP^//x3e.*ZWWwCP&y5fW[*XHF=JEmUIG0_Z~gIGgswhTD' );
define( 'SECURE_AUTH_SALT', 'od2 *SW=`j_`j020FZMy@6LMs#4&$+E8Wl-Y.}wsZTX*w9))AQS?ukiUB3YvxI=l' );
define( 'LOGGED_IN_SALT',   'U`fyE6a_frd,oiW~E)4UVg{jcNZ8rAeg*mB2XWbIl[ CJLr8Cb9MI[d|!#S5hzc)' );
define( 'NONCE_SALT',       'RMW0_5F2T0gq(us3n;ULje{Rc$z#V:}*u<G,]wX$95!$OlJW4KIP/ob<SnIKy$MZ' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');

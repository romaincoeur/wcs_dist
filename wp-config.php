<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'innovedu_wcs_backup');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'sam');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'azerty1234');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AOO=Ri.%]I}+~O*q?4%w!|[hV4]wd~?Sh{tw/jugr-fl9Cj0^S@_DDY6oFSw@3AX');
define('SECURE_AUTH_KEY',  ',.o,158XtmQ.VC-_#X%#i&0BD]8QY=h)XFEweXQC5;1[/Q-6}t<22<Tv>|rm?iB-');
define('LOGGED_IN_KEY',    '))/vV8$BMtW4U(E]`=; 8Ntb~Uo|E~L+gn=`_j0Vq?V^W;>idX@%K$)k;BQ4&|~&');
define('NONCE_KEY',        '.q|!JK9L49+ qo^|[Gv/6Y`-,bh6$)*2QY}xZ94;SA@Zh-NV)L%-9zHcX=8:u>{Q');
define('AUTH_SALT',        '}oAKu#Dvop,x(qCbl6wSV_*+F(NmK+aU{Xe8Xy1XK.Yid(% gd^q%]m(6!{ft<(0');
define('SECURE_AUTH_SALT', '`<Siq4k(ZaLNOK_l<^q.(e3l0dk3$*);2M8XT/|.V~ATaHWp)| m,h[w&KLkPnrJ');
define('LOGGED_IN_SALT',   'e]t5e+=W-po4`496wWL6W^z7B+YtS,L|N^0j8_RPkzd<ua2m66sAo>[]^mgOGr+7');
define('NONCE_SALT',       '7gmMJ#*2|Qdy~N~cvyjvL[Bigb!)q/q%|H-%TU|2Af7J|/t:p<y7y[Ha:WFN$`j=');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

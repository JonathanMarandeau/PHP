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
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Ibrahimovic7');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ft?Gd+oRHzHZ!bvJ8%> x;g^Dxbdp#yyI^vf.GJ01I-{Fz}9TiK(OU9Ers*I6,b<');
define('SECURE_AUTH_KEY',  '9nHSkgW0+{m!7[vhIwP?`yHoT6kFR[nkGH;s~*EqEt]6]dDXgnu22_}tQdY--KRs');
define('LOGGED_IN_KEY',    '..O<T<[u^u%=_q@R)sP_6l>NAthYLt@-Id}E1BpYXEpE]Hh[d><br:,Ny/Ds|ps5');
define('NONCE_KEY',        'Bh$DZ]dA0I;[Gwu63z#UPt+)jTnwAzv_&bb_@`zd@,9Jj((N5<D#9!Msnz+b{-vi');
define('AUTH_SALT',        ': Gb,+X{1e~~CWBL(Q!@5|tJ.AVmDJ?NBg-HDHrPxy0=>uqx17+A#>A!1yO0~EUr');
define('SECURE_AUTH_SALT', 'Za`kl3rr]R520-Q7(,5iApEpT):>(08Qi)X4% lRRYFOX@:#!g!6dau%W(b~[<9&');
define('LOGGED_IN_SALT',   '1<=J_pANU.GN6!5U4]f$eWd^hz++V$[1EJ10?+~S&|n<)Z|?g*>Y;`fZ9gm1 U:s');
define('NONCE_SALT',       'LXRY0Pu8wM2-:XX6w(oH^L2j}fb%7qE+Ux..E<f7F6fZtZ2zUK:hRx 94dRE^rbW');
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

/*Désactivation du mode FTP */
define('FS_METHOD','direct');

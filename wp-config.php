<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bootstrap_to_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~clOKch5={EL&i}-5Inws=#x%<o-H#HS,:|4ZNJBg|I@D;ng-.dY5b3lOFW?BzO ');
define('SECURE_AUTH_KEY',  '0$sZHj4iUjPW1/B:fB/7hMF+yKz<>(_o?aH:v|c%OcoJbyijDum6L$@y~Kry+cf&');
define('LOGGED_IN_KEY',    '#mcGRfHAS&f4Cz_94}bcj4Uze5mUQ{X1+(X8rl{)9dbw+jra[4oO%Ru}~:<F,K5D');
define('NONCE_KEY',        '~5mu]5B^s3s8K!G8a/a5D5yF?*0~B]h7vvUy(Yx-Ijo9&Qh1p8j*](cC26O;VnN6');
define('AUTH_SALT',        'a!#*:QV{hJ]kyp57^x:>2HQguc@@e)FBOA)&uX*$}4q)1}DABdjhuAI__C~jOTwo');
define('SECURE_AUTH_SALT', 'I%NSDCL*jrA0(j^e|s|:CJP*>3X}OF&|a^-2%isj+|OL2e`1 Tz.= }}=2)9gll6');
define('LOGGED_IN_SALT',   'L)c#hPQqdH#0j/G-]KHN 8ItH-]SMh!^]lZ&&/3(+OFC<cF|a]e+^/hp^Q[6+OpP');
define('NONCE_SALT',       '#h|St%>^8Sl$}8E]|0/`;2/6%0wqa3Y4BVZ6G|?ow83@Vc6QHNUsnw[%;{&FEhBL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

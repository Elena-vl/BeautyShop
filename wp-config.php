<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'beauty_shop_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '&y@ mqc[_&3dE)u8jxBP^6ee~cST-6tXpa3UXr;Z5M41$xtKb(9/NAA>HaEzAKSd');
define('SECURE_AUTH_KEY',  'mw1w=TzJ7x{@<Dp2vTRCRYD>o[l!{!&KWIWyW-?(OJ-^e%L/E -A[-_i;usYZ6fc');
define('LOGGED_IN_KEY',    '//=R+T7{W}Z{C284dF;V0nzqt f!0I~l#p/N+vq=4.}N7zwU}|+okcEF>0%tw7)M');
define('NONCE_KEY',        ';RVtQ@P6VBa&F?)9&`{^`e?sR.m|Ife0%?C>[Tqf^D{qKU@mT+lI7H!bnRZd(b9@');
define('AUTH_SALT',        '?m*rEL%_H(w1<{ezQZwW[zH$]lJMf KhXOoOLtdi>G9fLUO7 W:Rl$nOD3e`HF6@');
define('SECURE_AUTH_SALT', 'M>$M}+}cJA1t(&T4J]2ocj-h<6E(<QfECSc{6=US wcg_jgSNflLUocP]!|Rnc<7');
define('LOGGED_IN_SALT',   ' 3p#s&A=K#26[S028,]y<kWD)6m~#f_u7A28NpI4]k!&&vqxaxPPrQL|% %i[a|(');
define('NONCE_SALT',       'EI(<)YP0>+Y3#${N`Xp^x;C|,U%qm{|kyE{,h?va;2+}:Bz#rk`XX_TXw8!i7v$8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

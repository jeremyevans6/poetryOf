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
define('DB_NAME', 'poet');

/** MySQL database username */
define('DB_USER', 'poet');

/** MySQL database password */
define('DB_PASSWORD', 'qazsxdr');

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
define('AUTH_KEY',         ';x0A&]h%)US_?8Cn~lwmYJL#k$!QN54V;!I|utM(4Lh$/O#doRAdXwHEL;|BF4h|');
define('SECURE_AUTH_KEY',  'V^k%uUKg0,P2!D]jCoad@4Ud*|@UW|9{3#tT%JItc.,o`(Z@L{Bli[#3N:qvE{O+');
define('LOGGED_IN_KEY',    'No|f.Y%.SEi1a%7v#lv_lLl5.:/y=/(CtRiNy5>dj>^P$BMe<?<WP6^eg$*vW-e>');
define('NONCE_KEY',        'a&uA#Z^(3{EwM?k5c!.OW|[(%y(PRaJar.OnazNACz)?k><BH{(]h%!lhrVC|`Vv');
define('AUTH_SALT',        '98]ZoT1Od|fZ1!ol-kny:iUz;8ZtN 9Y,|NG-3oEPRN2D)%~s?w/SCB} (d RyRm');
define('SECURE_AUTH_SALT', '9IuwwWQy)!rj?tL0]X&-e5`DfEyk)NiUaj+3|K;16A?ME}Pm{1h<J@--I#7t#8rE');
define('LOGGED_IN_SALT',   '3TCtzE>t>R-Vb7EoHQ80EGQ$S^H%T~q=q uPbCN*D|X6|G+4Mh8u*$~_uB`HVcEW');
define('NONCE_SALT',       '$y6C8.@XDl?QQ5VR~SQ1{sN%on,|&qBp({I/r5.ZQD9w-hk++]izre94_8x>A+]I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'poet_';

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

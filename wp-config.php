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
define('DB_NAME', 'db_stslis');

/** MySQL database username */
define('DB_USER', 'bachinskiy');

/** MySQL database password */
define('DB_PASSWORD', 's2117086');

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
define('AUTH_KEY',         '>fIP/xWEvXlL`n<_p8oX^`=F*qw(zkB~]c}ilA+)G1.{p^4e/h`}_ lb)^%ps 1O');
define('SECURE_AUTH_KEY',  ';!z$NEj/cBW !IB9v[IE(|@s@$Mg]Dp@IEp{^?/_31K^7o|, OBM| .vTVFtX[lM');
define('LOGGED_IN_KEY',    ',du =FENXw(cG6B,/8OLRvP&xD7;!^ab6B[2vsC3S7|J[6(RzYeZ*PQ#+s[N-T;*');
define('NONCE_KEY',        ' [}DqBO1)S=N4{)~AFr,=xieI/T2a:n=^ZO5W>98{}Xd4Vw^^:,&M}y_(xCI&5;{');
define('AUTH_SALT',        '7-IfF`!xNJwqj0FpEKKz<z`SLrv[[Q%DqlBC>qZRt>-Hj|4nY=0jH$ViJ-&F|b:,');
define('SECURE_AUTH_SALT', 'mzN~Y%9%&/];6m&wS~{3l<XnjY^,SuFx|FNNy>G*Fm+l]2pZBf id#Zs;K}/7^r(');
define('LOGGED_IN_SALT',   'c_L1As[Oy0m#9 +(GY08hgnB{w(,V3H7F@#m@:$o}R4Kg^rpoDiDLRNf*CX 2<)V');
define('NONCE_SALT',       '?0qoyjx[z7,E7 YR[U{3PUf*)eenA.)QwrlswMv;mjT>:.jb31_0sHh_u~E|bWHy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sts_';

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

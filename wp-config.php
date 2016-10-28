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
define('DB_NAME', 'canabis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'hfgfkf');

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
define('AUTH_KEY',         'wCwP`y+zGRKU`4h=d@q,Na$}c#SnY6XpDcBw%m|OEAa)l.i`Gk|Nj~R%M10kzDs[');
define('SECURE_AUTH_KEY',  ',AwF0MoE(9buNe%3< K,zA5O[seISkpJ%m7;QTB~QcN<1&f8,UQ~8P6~j>^kVam4');
define('LOGGED_IN_KEY',    '!p24a3JQ:8kP!)q+-X.0Qt$Lv88^Z(y/12U,LQs0&Y2XjtSQQk~UV#AJ+}{8N!?A');
define('NONCE_KEY',        ':>OFGP-~5j56lq!.%>u_LWs5bD,.($Q4*|$H!{3jBOoIxU,%KRev9kDOnu>>y&;c');
define('AUTH_SALT',        'q=AfK+uWI>%fAZFYbKTMny4[UK%3c?(Y<_y&x!_z M7oO*Zq&bP#e8ah~cJ*Wh{7');
define('SECURE_AUTH_SALT', 'pHfko^v$Zo<.FwU(SW)UK8SuoP6Yfb,5MM%@X90Q#pAMZ_YA?mG7Nyeg(ks#zDH`');
define('LOGGED_IN_SALT',   'E*6v V-u:msg!&nY9MNSCY!j.[NL_Xy>H%=yff;#-RQ!&BBjk2H~BS>FG]:.NZr!');
define('NONCE_SALT',       'Xj_$ `4T)7>I6gH)cwR7BaN<-ArY(g1&zM@xTP+luar6ri-  !w=tK5oAxCwZk[e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'karma_';

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

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
define('DB_NAME', 'wp_subscribe_plugin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'andrej123');

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
define('AUTH_KEY',         'z8+Mv9ot6,%}ZO^I~XPW|xMivw@90&82lv7V8qmX:u2I6zm-p#|z!PqjK/^/_iE*');
define('SECURE_AUTH_KEY',  'dowB]zhY3-`4@BWl^YiH%V/* /%4oJ`sUxJR@.+{7jUr,PhwQb_NBxm0Y{#P-O@1');
define('LOGGED_IN_KEY',    'kLSDBv_:Z/&JO@Q+_L-98i9r6H{$ZjI}B`p5]2l(&[L9BtFw>FF<OkVJRH8uRk,M');
define('NONCE_KEY',        ':@)Ps ]iofJ]P9S5Uh%j:W2%62_2@E31(6iVRRi#,if,WqWOm}}kwh07+k!0<Py`');
define('AUTH_SALT',        'jdx*I;I&R+dz*Cr;l=ytZeTGP]o,3OuUcS}~v70T!K7MEyTyQxk_50ZS-q&ZGqQQ');
define('SECURE_AUTH_SALT', 'KpdSD|~yhe+gTFv*#<4S:#!; jpWgV`$1:_`+<QA.~raSXe&/PE MDGxqJcyqdOO');
define('LOGGED_IN_SALT',   '0z&4tmAt&3^Zd(}Xj!n]t^;:zysKcVD-b{W6Pu^V_]z@wf]vd*)Bu<V+48P`Ge$x');
define('NONCE_SALT',       'HsysDqJX|uB]2`>UWRGg[&!u5a?_lk.&ITR^or@<$4AURPHUZSW/n;~Y6tDyL&,N');

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Spinex' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YFg7.tDrFpo .d?Dx|y}10]EOhIqJkL<*S6ydWsbIJJqW0jthZI,.9lJ+8[K}`_h' );
define( 'SECURE_AUTH_KEY',  '_{+?Z,`tUA8M[d<,!i/Fg,A#5WSK(R>*SF:|va_7M^0iSm!2#iikuQ-%vunY8.y?' );
define( 'LOGGED_IN_KEY',    'MC04~@bsY`t$^az*~s]z+.+|{,u;1J4fqNGoP::W4}$n^/T73Kc:YZ4Q%1papJ{,' );
define( 'NONCE_KEY',        'XN&=[2vHEx*E3pn7FbJdfNuHYnRmdihAo(M+aHYw!(8D0Rdn6$NmScv|HVWD`j(D' );
define( 'AUTH_SALT',        'Sr6IX)v;K[$KgBb2a9%?4zB=qTyj/.7P8$f2L-h7$ZrAG8zr8dUpS&W#+A@_QsqF' );
define( 'SECURE_AUTH_SALT', '$]];;6d96I{=03;+T0sg,D7-b 3h&PnUY(Cj*oRs;G?A|n#>t@r -* ;a}(^y9Yc' );
define( 'LOGGED_IN_SALT',   'jU*[##!/fAiINymJU,Ownuj&VV=+G_HzJ`/`40zYcSA-vR.Z`IR1q2U!DsO@|>#c' );
define( 'NONCE_SALT',       'p-YBs&hGWwI+1PU)oV8*AJuvl}s[{`C@3Y:zzzE.%F/JSeW1?8eXxc>+2+ywq*@~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

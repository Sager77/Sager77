<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'QPx^Se,nLyyaCEvRk:.{5ySQ< C8M>BSsPx0i-`X]u`2<M66&EgE6a+5/1?GTQm?' );
define( 'SECURE_AUTH_KEY',  'ZSu<$yBKC4 &}NOboV4}IEKX[(xM5azLVilc Tv.2G#R3N@Xl)1cVV5JMM.4lA4e' );
define( 'LOGGED_IN_KEY',    'UY*z,z^%+]%cOsFb~y3/@5NBL*i%@iF}63A@Fx%lRbl7A#)jlZlZqB9Y[nw&Qpi,' );
define( 'NONCE_KEY',        'ej-:~`*B_9LY8(^E*/-(H`8j3SziIz<-wFw_L9{wlq4*#v[I}B4S:.H^AorJ7}Z-' );
define( 'AUTH_SALT',        '{&[lw>]mOylw>t@7.YI-fx0P^Z96h&d:$)q:`Z:ryp|3ag=I{lJ1]:NTsU+8R;i&' );
define( 'SECURE_AUTH_SALT', '(e+Z#v6=L{-ft,p;ntf>JgbmD;$WN|bzE!6g+ ,v3^g)bMJ[}6mR7BSnN*FBX-x=' );
define( 'LOGGED_IN_SALT',   'J9/<2qw[jK+*8fSl.8[R5$#fLUPW.N[+7p )@^D0-.>3d@Cu6%~7(WbXww}kfLZh' );
define( 'NONCE_SALT',       '9q%BhCl3qAdu]G7SgKA]#TB^P`_4qkVf N!wc!rcl^6eM[jOe_b^8h:C(F!i$u/#' );

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

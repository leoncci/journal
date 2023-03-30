<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'NjtTLFdVQ3YuMykhMUBGTEBpZXpsUXgkKmt9IWErfUU+dHMqW19pTTR8ZGJGM09NXlkkM289IWh+bnNQTzAmYQ==' );

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_lepays' );

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
define( 'AUTH_KEY',         'A*b7_;th{7@L!/F4PeEyt}4(ra/OV/U7X)gesTP?<I7iz}<`A(^<Q)Tvp<}wgD2d' );
define( 'SECURE_AUTH_KEY',  'hVme]mfMjlf (xx-L7r-qh_^}#K<lgMB&T}~>LF1qF/{qM34cK+pQ^!NN,wNWoML' );
define( 'LOGGED_IN_KEY',    '`5#n)C,m:(@:1wIdXPFenY>f#uLZUvGQR~Z_X^R>i`$9wBiL>3OqfvZR7-{y@!E)' );
define( 'NONCE_KEY',        'V r]1=~@!gzL9o+:1VFQ,s)AQ7#?>pnLS]J~ua MT1M)C) W`*7^lQhYPGwM1?Rb' );
define( 'AUTH_SALT',        'VZw-8gAEh?X@IQDE}:0Xk3PrZn!bX<dXmfi^]WtMa/~7lGN;$F0^vw%*Kcsz,0$l' );
define( 'SECURE_AUTH_SALT', '!%8:x5 z?G..ZSD|iN|Rec(}wn09M@}*=kSM0!>>Gela:g>=%>N=m Xke#wle.rV' );
define( 'LOGGED_IN_SALT',   'B!$)TO;f6OdJriq*bM|su#Q;/y br`{)nz]@#wl17 #Pu v?>hRnje8/U2_rQy_7' );
define( 'NONCE_SALT',       ';qPo187nh8 N :}0}$g[/e8K?dLv*E a|_;4Upjvbec>D v-97<qs}6Ya_-s?Wqk' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

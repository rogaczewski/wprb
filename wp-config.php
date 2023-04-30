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
define( 'DB_NAME', 'wpunder' );

/** Database username */
define( 'DB_USER', 'wpunder' );

/** Database password */
define( 'DB_PASSWORD', 'abcd' );

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
define( 'AUTH_KEY',         'd&tk)3eq)9&}dF28T%%4=-c|>VZY+4S&uZ$+gj}BfrJko,M(#HVAaXH9[zX)$Ihe' );
define( 'SECURE_AUTH_KEY',  '[w3GG<pov[Uh#RJ*u{9ld@S:Gg~o}Nc#Vy4G{sobI8br}|dc+iE,l@8SvUC|fBv]' );
define( 'LOGGED_IN_KEY',    '}rq0/6e4Hy+,v@2)sQZ/s>]?%%~JbtAUw~w-7GzI1Q6UVKeRQK[0bZa{`]FIpd^E' );
define( 'NONCE_KEY',        '1e8Zwe=.Kh_fW X^g22ed)n@TL#Kf^.[@*a&g</)|@K2WS30}O+;yOctQjBzZ:;c' );
define( 'AUTH_SALT',        'Ll7Qd&/PA!3CC)sUx^d~FE%a(4/DZwCQ1y1Q%} mKHt1Oc#dBqgUonsoaoINeqNY' );
define( 'SECURE_AUTH_SALT', 'V2j!Ctrr-u2hQ.zFhv-aZ*|WH4SZHyV?pvSc$M`1]umA0&2Ku7xf()`o8(KaLQKt' );
define( 'LOGGED_IN_SALT',   'TJze+[u|N1sQjmP3Q,7ZvpX,;ZR_3[;dhJokW!OK$EZJ:hDuhPeD,:9`dWXGZy::' );
define( 'NONCE_SALT',       '.EQ9:P:)]uJj,rlCa~)Ygqy3X}#nYf?V}.i?G?*2NaY:&ecmnGujT7+n1M7<{:PO' );

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

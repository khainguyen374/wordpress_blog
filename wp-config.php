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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'wp8%{W:}eL7</9G^&um8!YsFIo+y/j~QLDe|s|VsJOaA-WDTdvc#/#]e-0k}wpcr' );
define( 'SECURE_AUTH_KEY',  '`Zo#msFoR4_;}sCu-mQ[ijwzuOso$]aY/8/-[SOurUA[gvM). 6>0,sTB[DOnR6T' );
define( 'LOGGED_IN_KEY',    'ESm9IKOwF9rO:[H2m-?[$imTd<</4n|O#i}NT[ <&*n!d^:<yO^ffg9QSw I:)GG' );
define( 'NONCE_KEY',        'Qk$Wi#%6M}>-O.AGLd_C<gK:xL;KbHBsleY?/!w&IYNj+9$-G2QNEjf;z$tcwp37' );
define( 'AUTH_SALT',        '1R+OKD/7EdrZ$R_FyNpS8&Z8GXE4^Y#Mf]:Rn@dAo;]q)6)9zW2azpq+AK|oaK-S' );
define( 'SECURE_AUTH_SALT', 'v6afD&Nrl()E%&#`kwKDZ3;AWC${frHSm t!u=B3rs^c[/YY4SXJIXfI <#/6NR)' );
define( 'LOGGED_IN_SALT',   't5J):Em7X&TJTmi9]P29&pd=|~iY.Agje|-){xH%6.F&d4TRnO#]r;nZ#FZ||ul.' );
define( 'NONCE_SALT',       'lb/-r4wRY7%S6;`1(UQkZSrJq$G&qTX`8lFV^<XfC<S3=pp+cdA;?<}.L6&k%=@X' );

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

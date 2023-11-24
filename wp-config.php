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
define( 'DB_NAME', 'yashp-site' );

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
define( 'AUTH_KEY',         '@Tom3| _r3}IOdv!_N~w#iDJ!|(A=@lvmOwZFPseP(_:)i|mHI;mJ5e@L!pvh60^' );
define( 'SECURE_AUTH_KEY',  'LnL0`xR0/ul<oJjW[A`J6D[V83x[Kgpzu?I:=Xes c@5lFIX:y{S8FK|]C>~<4Nt' );
define( 'LOGGED_IN_KEY',    '_VR!ro^V:2,oXJLv)!LW xfE2@DK+R.JGN6^{;ux+HcH<J.?>EBmy;~D!GX6X:@p' );
define( 'NONCE_KEY',        'i.9ym.G~>`BNL^5&x|o6SrSv7Q#^aA2gJrVaIug|}+0>V`HEV25uXjSq* _Y]X.U' );
define( 'AUTH_SALT',        '42YhHqK:83OrXTt~mS=FE|M:R.Y(y#|r*Wev6n:-g_]%;Fj?lhuvNv:2g*,N0{lr' );
define( 'SECURE_AUTH_SALT', ';39Q=toO~0+%^3)2+-#q$Zj^Y6tqx |*rwiu.`|b9TOKg&}J_8:k:ozhQ,vrzXz}' );
define( 'LOGGED_IN_SALT',   'v[SF+y0oQ^$;j,Ht6uh)s<k%2Mm1_cuGuDFv A7`r6YH_lMXtf->NBM0tU3M=Zyk' );
define( 'NONCE_SALT',       ':V)zac~,V(9j6fZr))AFQ%1 XgP.vCdA+o@O6~e4{,Q)mSUhg4~,u(`_6;h<ON09' );

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

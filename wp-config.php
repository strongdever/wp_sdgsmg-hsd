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
define( 'DB_NAME', 'sdgs-hsd' );

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
define( 'AUTH_KEY',         '^fB? e>Ys]]WDQE01{Ph73Yy-/vx4uXy*h6!B{4[zxE/?ZE{C[D*p,Xx23m0/lP`' );
define( 'SECURE_AUTH_KEY',  '#~!|l$,kp%6>^=eSeGU+:zD,>h%vW_VoT.szNHgW13Dv94JO$|Jzs-K7gH?`4+T)' );
define( 'LOGGED_IN_KEY',    'VW^8iKLo,txe6r*R-j3UT s`Jdb@U1$FT!+WV-j68.g[]MtrFx>L{qZA.3+`R(%_' );
define( 'NONCE_KEY',        'KJ@t*!!N~]SwGeFlE4<MAkhIK3*I]/p7w3t=R^}I8>K9kc>JeppqCU0)_Q(E9Z|(' );
define( 'AUTH_SALT',        '(7VT{gk{hHUILr*G;&|tQ?CpSlw~hE_nGc.gis c0DDEo{MdW~d/~6D!-~&SQ/~P' );
define( 'SECURE_AUTH_SALT', '?aYz4i%KL&lA~_ */#o D=(oVEAf8QA.g^VQ{w4P&#<9/%hdbj*T,|eCP.&aT2`w' );
define( 'LOGGED_IN_SALT',   ',lkisr[Zk)6%Unk.$#]ti0 bI8d*>Y;*cOEa:R~WEWSGp&7~k[}!lIdZ+]hf!Twp' );
define( 'NONCE_SALT',       ' k-s:/fk?N C/)$1V /jIk/ Q!,xskV{@9)yQXN4dV5JV+DsFmE(#=2N},i$-`hC' );

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

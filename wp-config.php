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
define( 'DB_NAME', 'mycourse' );

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
define( 'AUTH_KEY',         '4[%>kI)a#G7Eyyk a17Ga>Y6+E/VG[L,&M:L6WV?}Jv0r3{61,?uTObBoqO9[33e' );
define( 'SECURE_AUTH_KEY',  'LT_R&iC9T,zH|R8!%S<p956trEA k1xUA3N,Uj8<,D.4vh8!2/xJcFewU<R<6a:x' );
define( 'LOGGED_IN_KEY',    '+z+LrrVyG.&.`.]Mlqav$RB{G}QQhn?rUv5TQ!?U=6Z;98H/B.P-i]h5P_2S.x##' );
define( 'NONCE_KEY',        'G1{],>s7WTsOOJU WLcX]h2]@[Uc68$2A<3sD@gnAgK$i ZOX?J`rzdIIXCH2ucY' );
define( 'AUTH_SALT',        'yTy ^YQ[}YeeXjnK=lVOU[vK:=?htRU_&/a?$&Yf_XhF&os)=,{%W)p-z>fj/.F-' );
define( 'SECURE_AUTH_SALT', 'jxdO2+.Z>-W?2iw^U1>P1(i_h5Oyxw-URCXUsO6aF5h<7~EzJEFFz`ZS)k`,DaG ' );
define( 'LOGGED_IN_SALT',   '^NXtXeC{JI>mt8]&K:vlD{-St}+5}A@{c$*3rHD^z.t~|&x1*x=D1)[-m;jUH2w)' );
define( 'NONCE_SALT',       '0sP%+f.EEj,;?(*:nkcwNz?oMLvwN:cZ}%}YfKW<=T5pc+SPH1^qX<CAV#9$3kQH' );

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

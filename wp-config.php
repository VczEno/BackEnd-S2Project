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
define( 'DB_NAME', 'S2Project' );

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
define( 'AUTH_KEY',         'pzw2R:!Q0$W3%[b1!9P]ej#=v(c_zYi1-[ith7R|kR}Cz_{=!Bl4Df:m[CG2(>b ' );
define( 'SECURE_AUTH_KEY',  'KAmmrmQGL;<%$0qZKrr-6JPWMW_@2{6[P,Cs&?OMRGFcT5Kt4wD(]/`rL2ca`/-+' );
define( 'LOGGED_IN_KEY',    'zp7i#IkXhyJg3]p:~M<PRx$;=?c.DC`WV;}o$>;8At6E15M,u%M&Bb#Mv(K,gAW=' );
define( 'NONCE_KEY',        '@%8e*G*1?C<F^pFHR?:}!#zk5E}TT|1]s!4[Pw`7PV79+FDR8pZXp9XuTBUKnTE[' );
define( 'AUTH_SALT',        '9Dolff8!>OCG9H9,O_XPYR,&Pui8t0so=0(+im?>BeSB|XC<>&F_htBMKe< S1}w' );
define( 'SECURE_AUTH_SALT', 'N%ezya1+!<,b4O.{@NvT^AH8I5hn-6MuM,)pMrUX[s7,Cpflzr2~$KavNBYKp$rm' );
define( 'LOGGED_IN_SALT',   'wrzhL!4be<!$[dXTA-a)eQOfLcX32Zsr/64gztsm?$Y>Oi~,,;C+KJEg/{x85-6 ' );
define( 'NONCE_SALT',       '4Jsm( F@jtI:!PuLPZaMg9pL|#c/If5Ji()yc$Q2[-=o(Eb1Ragq,gdvT1~T$vB~' );

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

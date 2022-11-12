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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_multisite' );

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
define( 'AUTH_KEY',         ',O*TzQy.DATU2VBD@K$3D=U6mG!s$@&[&N-v7z^U/aT` uG>mczFPw50+{yQ9Si>' );
define( 'SECURE_AUTH_KEY',  'v2)>tl4$Oeh)tn[h$q!g6[xllvIBCV1fOwaJ0oc/8.%=~J2(r/[pL~FI%ythO!5#' );
define( 'LOGGED_IN_KEY',    'TUspT>TSU;urS|hO6+Z m$a$YDDgGJz:=LUiQ}.Kn1Y8Y)L5Jh&xH0u^>~eJh%za' );
define( 'NONCE_KEY',        '*/ py#]Ic7=;@4mJ5@PPK2gf,w~t$2k1>)ce4~7vWncauL@yxz$I{0&RzOd/^#U>' );
define( 'AUTH_SALT',        'n-K2&.^+dM&X,0Vp#)BcX&spt_Ovw>d0u[>;72?@Ryo}zQnQ^esxQwV?xqjmyCV+' );
define( 'SECURE_AUTH_SALT', 'gt;J KFbw<]zrBhvpU%pNU.O{ywT:5F<l_VG5/qq*T~@-tNLdzZ>*0.4IukjMM@6' );
define( 'LOGGED_IN_SALT',   'VBcl 4Ef#VCC(Aso@.e/5z%GG3(2Wf0Ws7x6zsR$IH|QXnx%oe@Nn(:%}B-.GxwH' );
define( 'NONCE_SALT',       '80S*K|BCSEuSO%/2>fMA8y.g,xt-cFeRv%eiIDGH1&9jceo=JL*c8xPXE-Z?vnnO' );

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

// define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wdpf-51/me/full_stack_web_developer/WP/wp_multisite/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

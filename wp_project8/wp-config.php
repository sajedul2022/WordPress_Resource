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
define( 'DB_NAME', 'wp_project8' );

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
define( 'AUTH_KEY',         'XKdEGj~nWGC>6}0LnpfgOn2mE[/V4K+YGi/L(pP*WJwJGwe-xAh%P$EG<YG/?G4e' );
define( 'SECURE_AUTH_KEY',  '<3L29VMEsC]Yen^^|]Rt8^n(_YD)9A IEM=2]EYMFwy.)#2`5hmG!*e;I^vf_?/*' );
define( 'LOGGED_IN_KEY',    'hvUz}YUjd=[gvARS4,=5.Hpo#To7S/euL:pk5?{e>v%e|!!R*)Mo9pOSqCz)T6Vn' );
define( 'NONCE_KEY',        ',vZHkuB/KPAV7up>AiGsbAl*s+. 9Ts)^S5e{bR,0np<|UW?r(5,6W=lO?*~F.qy' );
define( 'AUTH_SALT',        'Y>kc060e,oVTWb0LSK+J0%ej$9Bmd=tdXM3L>cu}!Fh(W${Pptv$A^H h&uTM.5H' );
define( 'SECURE_AUTH_SALT', 'RV%F{I|.3zf(7uM-we/Tza&?_4,BWUR>] WUL_2mB7n4Q2U+*[!+*V<KJ}bx6C.I' );
define( 'LOGGED_IN_SALT',   ' <$MCHa;QjNq0#fk 2z:J/,$6a0QnoF$= OFHGGPLBbyJMaMEe*N0YL6!1%PA*`p' );
define( 'NONCE_SALT',       'i_vkqDp=d<C%$%pVC[QD4bup.thABSZL>4R%JH5>WP!crlKa,WYqNZy(7;a*B#7B' );

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

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
define( 'DB_NAME', 'kurs-wp' );

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
define( 'AUTH_KEY',         '7<=5qD.!(gNyA6B_mIQ6<,A9Zue/9A@)/A}|zz3>2~/fK$dr.H)Kn.bWW1Z{@ZxE' );
define( 'SECURE_AUTH_KEY',  '5vas,C^2$r$E:#O($p;l$Z^#Mx4TAW|Ud?)UAV1Om|fDQ%O(IyFL4Bt)%zWJw<=N' );
define( 'LOGGED_IN_KEY',    '2SgZx%ORLa,/cMb>vYu*nj(2b{0?r1rtZV0e$C>W)b@?lSkWTMg;_cf$|_V V%m:' );
define( 'NONCE_KEY',        'C)s&^wBX5wQ#}_`o igjWPf GWU:D:+@Hb;a$aP?G;~% FB9T?j[T(o|eaUd@T*&' );
define( 'AUTH_SALT',        '-uT=yChwBFAB]BELM{[_Ql<o@ST.ls1yZR98R6]RsG%_5$O&Z2p$>-rcwSkH|P<r' );
define( 'SECURE_AUTH_SALT', 'z[Byo9!Xk6 oj{fk%fPi!h)p>~gV18JQb_{}a{kO~N&A#a0?]IUU~-L!k=~^F`+z' );
define( 'LOGGED_IN_SALT',   'v|?0/i#$dcL4*+mH#/dojR0glyjLfA@`D,zxuLE rV++![TklQ1DaFe%.cd:;!/3' );
define( 'NONCE_SALT',       '!qrY1asc=08,aMQmL/)~_O/S:?f)g`r2U[UgsMAW5 b]cfKG6D|2Nq3wR;Y<{/7D' );

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

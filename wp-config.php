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
define( 'DB_NAME', 'api_sslsupport' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'W*Tp}1(rm;F5jj1xxG7$Q=`n*_~X3jJjvBx0QX5%7+0En8C%>]x_12+ 93NFHm&$' );
define( 'SECURE_AUTH_KEY',  'CN+BLc$R@7-;D,,lfR.YBUgu+j;e-__16#{;F1Q6Z0/t?pliTH?adrl5_fJk5?U;' );
define( 'LOGGED_IN_KEY',    'j3L|#T7`[ha?aZ5cd$lRQv)rcQ<uq:u&4|) 4Xn32Z-hM]>[!3sCDG3NYjthjEwG' );
define( 'NONCE_KEY',        '4yR`K/rywN=3qby_wPC2Ja9.i]218T)#WE:0r[OQL=Oyl7OOB,kI8p8(M@0Hy1n?' );
define( 'AUTH_SALT',        '_hFP&GXGLGE0X*(y9fDrcsn=a*TC|bjV3`XLm1Fr5_ao;peWJdi)st,`Ic/qJ+`0' );
define( 'SECURE_AUTH_SALT', 'h9KqA#zDVODZ|m_,#+_=sMBHIQu1V 6a+Qlz#vT_`vSs hl5l1Z%XMDGee47p>pr' );
define( 'LOGGED_IN_SALT',   '5V~qV/{z7XTFmULXuyqw.<MDl;U9s1c)?~iR}DSp?^1LE8[tC711 SSi@pf%}$(6' );
define( 'NONCE_SALT',       'Yxi|9/0FW%d&~c&%Dr_|m:~Bm#|uCbP**Kf^VP0T[z%u]o:)OYnkXX[))g7b*uO$' );

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

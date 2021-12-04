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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'EyAA{ZO^BSTz/D*QB}o-OC]2N<G-%upT5X$h>SVF3yaxC06)ymzApH0(`h~a3IRi' );
define( 'SECURE_AUTH_KEY',  '([07hM_L ~:dd4q{]&$=s|yYkR_U;cp]_Vsx91Glbz-b.9PZ Z+X.!aY-iT5[cf1' );
define( 'LOGGED_IN_KEY',    'CZ@s]_N}ZbO>-Lx|$.OvSD!P^UI$}ozAn@y@YRik9:Y-_ mBkQr5z^dxf{lvA!O{' );
define( 'NONCE_KEY',        ']4ta61#x$ =9IJ,2?30r=%Bt1;QYI+OCxAsUX_@lqD7a-.W9G0uBy)c.{5>&.2Hj' );
define( 'AUTH_SALT',        '`vbBK`Qu!-DmQj99b^fMGU=xn!%%%p)j(4P6Cc|%GdG^1`}}.!BQ6%{m`}3z|t a' );
define( 'SECURE_AUTH_SALT', 'n{j5UL@KR<-]kC2*9xG}P+K,GQGBWpgMte6GFFC[_E.[?<WFZSmQ/R?U#zkL#61O' );
define( 'LOGGED_IN_SALT',   'Fa:s2E3i-l?N3eWqvdA<^Oe!pzu!/&rFBCN)uytMVM1dA3AG@8b%+RPBq,}dJvw:' );
define( 'NONCE_SALT',       'Vz+spjB5}#6M:f%[FW5e{3m0~I+rXyrEL7`w>Q#IHcseSQ_?s 266F<{LCw(yY+L' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'tnhan' );

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
define( 'AUTH_KEY',         'oI3R M_!0b]WVw2|l !_evH-eO$d>nsDP82XW[|Sp5@+PM{g.P^hxEtpvN;8gl(n' );
define( 'SECURE_AUTH_KEY',  'sZ*k2|=R/;BMOSTtA~AY(,(Z915yW6EQgx4LDW;R+ + 6;oxQ47$$4Rva2C>VF;q' );
define( 'LOGGED_IN_KEY',    '=4Ux1@0iIrS_OnTk%bujat,-Ws_E&p]=|n+Fs!{a0z.g:4z:G[,r9;|r#Zw,URkv' );
define( 'NONCE_KEY',        'Ga+rA,!B&;@B]TD)FWnH%)Xc_8Vm}ldxa0:SNt)vG)SMtn$%dio=eBqkRm>518CR' );
define( 'AUTH_SALT',        ';#LW{}8gSER)o.kJ%n}5}fEzI`EX~_| QA|Xj<{Cp7g8pa<N!Dw++TAcO7Nm#ef9' );
define( 'SECURE_AUTH_SALT', 'vW}s^2lQs[ i}gBC*T%l%~-0&HdV@CUE@~..l?AsM-[(f3iJMmc!2|8x@OC*V]3J' );
define( 'LOGGED_IN_SALT',   'XQbkv1gU)!RTv,V,rxcH[xCIe53bcnHg&!<+wol{RCj5VK^8i[08Lk)D;k[11s p' );
define( 'NONCE_SALT',       'sbW7^r;Xb|$^#Z)T^b[Qy/DT<^_*.Qf/l8>J)k;2v?1UOKQ,W^g:?qmVySZX-dpi' );

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

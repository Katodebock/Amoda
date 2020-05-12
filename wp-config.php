<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ID211210_amoda' );

/** MySQL database username */
define( 'DB_USER', 'ID211210_amoda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Banaan2020' );

/** MySQL hostname */
define( 'DB_HOST', 'ID211210_amoda.db.webhosting.be' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r@mGe`z/b/Jj{BarSyJ?M#Gp`-j!h!hQI$]np!a4=mh]y+w1dAu?[&BlUw7)/0tb' );
define( 'SECURE_AUTH_KEY',  'WZ%Lt,a[+iaBH`P{p5] UPL*K+E053Ee>rvHn6{F:bk;Fn?Z-+hla&Rv.mxdj9CV' );
define( 'LOGGED_IN_KEY',    'l9WXj/2eVEq:cMyk(;ps^s<TXa6fbu|%$*>P:/#9m@b4j]]h1DA+VAY6? 2U T:E' );
define( 'NONCE_KEY',        'HXW^k}<$!Z=;P!77$<W~VQU<0@Q*Ej*mHDE34I+ETi}j%`:S##sO,zbdz*]eli^.' );
define( 'AUTH_SALT',        'ap%^)8N)}>!rWXP)*X:RSe1bTWYt0Bumo]uoQql#RduG/pKyp6b{x^39gP)t-(|>' );
define( 'SECURE_AUTH_SALT', '8y;.<QgugK;j!Gm4c=$vbf_S%` NE_y8CfVvh ^*|}ygfboi)/v41ri.*B_<2 SI' );
define( 'LOGGED_IN_SALT',   'VV=9zn`,pDxCWj,tYBN6Ym4K0b)K@2(5FOv}wsV&(g76T6<J7{ht=AGKANjtHtcY' );
define( 'NONCE_SALT',       'giDlPF2#O!yVPgPwJXTgg!teo#]PVz2)yvH8$-dYnF#~1~X(|s,];2O@Y3e2@E1b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

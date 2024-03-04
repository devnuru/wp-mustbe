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
define( 'DB_NAME', 'mustbe' );

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
define( 'AUTH_KEY',         'o7{]gu(sNmT=48mx=468[zTe@{7nq#^K-V@yd88Qz<xvlD41Mp)v>;TGW`F^[w2A' );
define( 'SECURE_AUTH_KEY',  '/R}$Ubuv@A$$TdrHov*s#N e#-rp>Ih(BIDzh-|D8JxYFFx9yDE<lC/uK|4/^-T3' );
define( 'LOGGED_IN_KEY',    'XKM+~BARaU(U<]=1zlQoG(shUew_EkjR./U:o#YcRyp8Dg6f +(< }]D!4UudP6#' );
define( 'NONCE_KEY',        'EHfI`!rfw*gv0(g/}*d%pdTq@lkcTKbaeE4*cSbF xN0&)=p|U]vf2gA*^*8x{VZ' );
define( 'AUTH_SALT',        'A1)QK!+6 M%YB.;ELvIqL`4PMdh}y+IRDaa]WByBFFI{=$xhwP^k8i>L!TkuNP-0' );
define( 'SECURE_AUTH_SALT', 'TfD<2ERJ`Eu8&rTogeZ./eKKlc<VLpp[2BkQ`lGUyaFH,Q8=#LnO`IZGc?r|rudX' );
define( 'LOGGED_IN_SALT',   'a[l{P]idHj9kCy ;q[sl|XOomfrKQVi;uoEq{MeD:G*{:YsbK[9)A%l<kZS[xAW^' );
define( 'NONCE_SALT',       'gQ2pj&3z^; WGNCB<~y*ris29J~Y.4.#b2~w$I-ig-L2U?IK292`ym3arfZ9By@y' );

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

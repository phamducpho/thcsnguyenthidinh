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
define( 'DB_NAME', 'thcsnguyenthidinh' );

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
define( 'AUTH_KEY',         ',PGywf-)sc^e+/p$[:O{ajj/FB%q%8MO})b,pqc3{!kT n@=Q=HQv|^qDv:oB*OD' );
define( 'SECURE_AUTH_KEY',  ':lUapN5zPe!!*dxNQ*8D;S(WOhSmB FD^G,O=O8^lsfN1Kw6Q1Xl/H%>E|uUQUss' );
define( 'LOGGED_IN_KEY',    '3JtI!3?`7nErclY4<r@T@h`z#Dpx|!GoLRS%Z|;Ycn9.Fw#bt}=JrHZG0Xifi$,o' );
define( 'NONCE_KEY',        '4l+_/51{h6mXgE(iYIoS3CS{%Q:u}hy!O>Dejw %shR_$10JO<q0i_?3yGq$3>;`' );
define( 'AUTH_SALT',        '3d%))ph>sm*Lx$14Yrt]J%DXu?/:uner6m(RK8K~98Cl/=XuFx/mF@>[U8{:*73y' );
define( 'SECURE_AUTH_SALT', 'b8.ktoZJAo~G9X}9PIw4!KNAeVRdu[a5iEKC-=sNt[a%m-T%*7GR;m-^S^%,_j<x' );
define( 'LOGGED_IN_SALT',   '-tS?,VOZ~VZ-bTf|5RaYWjd!,w![~$ =*sTbZQ_f]yPBw(7H,;mS1XW*Kd9F`qF-' );
define( 'NONCE_SALT',       'fR1e)*9{5uxIf5f4zb`^>OImkWdLE%1KPXe*zS<ys]r9S|!=U(AuM{IP///S.Z^:' );

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

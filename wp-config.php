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
define( 'DB_NAME', 'yourdisc_amazingcave' );

/** Database username */
define( 'DB_USER', 'yourdisc_admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123321@' );

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
define( 'AUTH_KEY',         'fzC0ALm+*XG|PJ5UVoZ<8I&~[4;vWB$7$q?XV,25&}u :W&+EvuBQ1SGA }Mp%!.' );
define( 'SECURE_AUTH_KEY',  'Bt@T=2 Wpx,;EVK=fcK[P>Y~{=|iWS%9wYQ65V6F/QP/.p}4P9%3[P_^_,5?B)N[' );
define( 'LOGGED_IN_KEY',    'PMmad=`~G)U@rJF.iVlL}Vme$|EO}zd@J.4xe)]%Z#KfraC^<$(q[)Xsif+-vzz2' );
define( 'NONCE_KEY',        '?--rt+@W-..Y1kkhzK=Gw4Td[  +ZAE0<h{B*_]<Jr&^601Jp`@=-QdY=5Xijdv(' );
define( 'AUTH_SALT',        '<Zef?=cP3UxQ{5+E!Y56KOv-=/u{C607n8h{3s3(?/4I1mh.GA^W_GUDwa6*k]E^' );
define( 'SECURE_AUTH_SALT', 'y*X/o6S(D|6PVeGLC a %B+C0ij`7UzI=YHQ.G!k{[]T{C28?sp<-Csn,F-RZ)Vn' );
define( 'LOGGED_IN_SALT',   '2I2X|H$4l3IGW<GK^#[fou[0[c+W=E8f]kIeDL~O$h{MKOP|H;Kpdb@3TW}/[4^b' );
define( 'NONCE_SALT',       'WkC|WZZU8z::FXA_n$VYtZ:NZ6e-8d|(j~P?(o`V36#Wa`*MYlHy^OF, A^Mavx)' );

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

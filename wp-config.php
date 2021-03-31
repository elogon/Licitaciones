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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'licitaciones' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'QsV?[Kk:%#Z:5#2`1FRHNdu?`7p9]Dsi+Y:^ut*`)F#(v-=^z|T7RPF-BNrxMFl8' );
define( 'SECURE_AUTH_KEY',  '-`c*oJHdgl2J?il3k6PN9$`~I)[GuEKjcGK2,-^KTL@|{cv>b8}DR) ?LyL]6=J3' );
define( 'LOGGED_IN_KEY',    'F{3~setGrXfYLs>!6=jej,fRCnx.lReV:`MVn#)dW@y/a(~x]A$LhJuaps?vClin' );
define( 'NONCE_KEY',        ';wzw4yu/nyXlo,*iv}1*<Smzt,~_U`zXy.SobU;whD0Uh8-DTji`sRs()%i>C*U5' );
define( 'AUTH_SALT',        '*me_Lo34g><G_Z&;X~Y0&@<.>_t%Z`un53n=_rGO~NWMq!glTWws^c<_+Jmp-Rs_' );
define( 'SECURE_AUTH_SALT', '(qSp7mSc67&zB*ZCa;?-$W[kkW!&S)kv+I2j!~g??{KP4D^Hx]|9NMcX]P(3w,6?' );
define( 'LOGGED_IN_SALT',   'dFQ6BiilZ>u6s^2v4sk<idg7bQ9yq?v(C/m6CgGPw!b3YYgw)/K*DBhx?88@(a<h' );
define( 'NONCE_SALT',       '|lC5K>r?LICF[%e%jFV0r1bW80N_N#8[3$TPMgkmgBmZ??SnY^s)[X)2n?>oQ,5N' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

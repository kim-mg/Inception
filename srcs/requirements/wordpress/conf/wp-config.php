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
define( 'DB_NAME', getenv('MARIADB_DB') );

/** Database username */
define( 'DB_USER', getenv('MARIADB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('MARIADB_PWD') );

/** Database hostname */
define( 'DB_HOST', getenv('MARIADB_HOST') );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '9(lba!U3}T4MmRijh$Ip:M2m$VC5tS^4rf.7= oK-x?|k2dj|5;dmGxTuq$nDY 0');
define('SECURE_AUTH_KEY',  '|is(X%ZAMmIt;(%t0o@weQhRT+*l/W^sm<bF6Y&`<L}lR;7$TV&H{_=W+f/5>J]<');
define('LOGGED_IN_KEY',    '+z,-{DJ~JUkL}LNx<~Z&5*I<99qV7CYr9h*P7;M{f7GfG@ y4F#C^b201jR+P?Lu');
define('NONCE_KEY',        ' .>g=9NAB-q0~Ucluw86VxM]$K4y<MX-f{uD3.qA5_e0x@%)Iv3TOSZ5Kl= -6PD');
define('AUTH_SALT',        '(o_}|SyR%L-r@NIR1gq~E0jco3|tAndr#y}&]lg]}9I:1WMU#wFq9D4W/NnY%uBE');
define('SECURE_AUTH_SALT', 'vlY|6*&IHw}/l0y~T7ojI2~!qeq|@ M?HRI/(|*+)VFLC(o+I.K>,jcN?X@0L2B~');
define('LOGGED_IN_SALT',   'VJ,D5NKA7UHbnAEfo{9{Z1}4|LA^CQ|}<:f8B:[]xf4|/E7;&+i%]=1M1-cU`;!D');
define('NONCE_SALT',       'vC@B<_o4#Q?8jNl<DND#W?50:UijFz2`Io[+Fqw[4c+Y$MZ|)Xr;o>@_PbW3`5X]');

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
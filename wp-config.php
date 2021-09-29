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
define( 'DB_NAME', 'onlinetech' );

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
define( 'AUTH_KEY',         '[MgO/56U{+2/lD)XR#@dwM}fW(;?E#)hkHP5iaj{AItX`2MtlM=; >B|q L#)[j4' );
define( 'SECURE_AUTH_KEY',  'ie^i*G@x5d_R0)!d;_!BgC}R]5l0#{GdJQ-63V+N`QPd?{6G]Cr%>fxQW>NM&@cC' );
define( 'LOGGED_IN_KEY',    '-/7K{o6Z21]85M+VneA+Z&h%2<<Nc*{C;DLjnXZ6mPB_ +cF2$*-Tr,Ll[lFl@;V' );
define( 'NONCE_KEY',        'JdvfF47@]JF3AoWW(kbk^WunX$5LDvL?:hY-Jh-CF/|u{n1Q-L7fP@U1/oJ{@`nY' );
define( 'AUTH_SALT',        'PNh|5>,$HC!GenV:U,tZ}W&<74wE~u2xzVmd%qs4wDP&R~C=+K25qq1HH?<x(UQW' );
define( 'SECURE_AUTH_SALT', '{Y/@TWHQxFy_S-: Mteui^C{u^:_zuO ?#UeDM0zS&gB]OtAF pRV=FHg.c]|KEl' );
define( 'LOGGED_IN_SALT',   'N4U6US&`^SAn.;]ysO9Isp_giSQ+fpS#N~[q>^K@?w8G:C fOi+=(X?n]#>X|zM_' );
define( 'NONCE_SALT',       ':eLyJ5D$_cae|_;k;i=}gNaSb:io CH)2S-!?tM&kkJdxt7{fRnJFqK)PKlB9p0P' );

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

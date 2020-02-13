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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'd++RX/k:02WnZhhAGPU~DC5ma/A;tb[,w#x;.Ateqev*ZSB9Q2nTc!lf4SB<Au@9' );
define( 'SECURE_AUTH_KEY',  'xXA3N>iSs&G&>RR]t3nvn4Ip{,$^0#L?MGE;RycivIf~G./f%LHCb?~WYHWLG{2T' );
define( 'LOGGED_IN_KEY',    '`]inv3/`4*EX*9uM WbO1$@b!vr#z#+F3>q7RoV!Obif,4Se}Zt#(-2%80,*s%+Q' );
define( 'NONCE_KEY',        'ZXcyq71v7`0k}KcuYn`.mDb#a[m?Q6n!&X[FYT)jB8O3mG6U;owDOM9i{#nd#Q]$' );
define( 'AUTH_SALT',        'He1;/XO=~I*3v.6^;7U(>5b& 8EEckjBMZ7C7SK+_N#z,}[0`NqS<UUJT=$c(g s' );
define( 'SECURE_AUTH_SALT', '`9Fr%_~UC%q}6y3+5,#+soDMUdrB n95CS*0K2-9sYGA1CwV 4qr|WxAK|cAWur%' );
define( 'LOGGED_IN_SALT',   '-A1?6;04|&Pz!}31+<wy&@I~@vZbpuy21&<vnfx/IGI3I@*^Ya*CL;KNe1s8[-oh' );
define( 'NONCE_SALT',       'zQqt0K&O<Z,XI#goQ-htAN5u`mI*9z,;>x7VZkN)XTEq.jdwl$2_3@jaUE~{{])`' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

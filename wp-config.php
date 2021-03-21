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
define( 'DB_NAME', 'goldcapital' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '-HnwR--uK<{/#z9 9eS5OIJHX8c)6RMMOddu29$lWX@|2bd&<KR+5%4Toh*S8!w|' );
define( 'SECURE_AUTH_KEY',  '{?fcefq()GV_/,B#3adBY^OmM7!Y&}K]/2&u2Jdb!V[xf.D:6Lm`OeFeO_/4Sqoe' );
define( 'LOGGED_IN_KEY',    'Oy${$F21,49N}NeTaq26=k~EiW?+IqZj~=2#,KJ?YOen5jL(Q^XVE7po]0|Dju[@' );
define( 'NONCE_KEY',        ',N3Wd0r0,N+H3o@pZQjW}sWXf-a#(5vJwsk}:i#=hu2f]Ew({G!XJNue7|q&Lh3H' );
define( 'AUTH_SALT',        '9mR%&xh#lm$E<HGUB#<Xka29) y,!>%! NshODlTz.M$P<v&yr6;v~4YY6*?}A7/' );
define( 'SECURE_AUTH_SALT', '5ZF}n5~k{Vg`T1aZ#$}>BLpHo<)(crzwuaG)$^v7y4w eom772!qP5`rA9<.1{ c' );
define( 'LOGGED_IN_SALT',   '%P<!dk^Sp)un`(c+Q`h 3/#[:^SVl9XLLW$z+gj(`f/o/N(m>q0+v^SLCt{U]Iju' );
define( 'NONCE_SALT',       'iJ~W1e=!;$r-Xj0M~L?!m2@G6eFLflm|ldSWr+o|s-5PKT>O^ndsR-7$;N+[n=O[' );

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

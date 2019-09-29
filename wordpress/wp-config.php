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
define( 'DB_NAME', 'cms-theme-28092019' );

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
define( 'AUTH_KEY',         'K+eb` 0]kL!(K_.9~!llAs3rPG?7`;NJ|zM3YZk[]@VaNz;Zk-5kM|QZ(.8|%03!' );
define( 'SECURE_AUTH_KEY',  ' p t;{2>|H_Pj2<-PqXqq9Zq^2sQkH$Zr)ui9}RX+w~~rEl9{Y1Iac,uoS&J&8bY' );
define( 'LOGGED_IN_KEY',    'An:#s:mPfoiQptP+(h AT&]!JN29-:*9RHf]4$p.U}Im7WtlTq4Vch>F&RaAPU,J' );
define( 'NONCE_KEY',        ' #%|ep3{UH3#q4=a^@tw5}47x$QaV>!XTtpp{]cl=P97%rx%]Unc{Z}9YC{X$<Sf' );
define( 'AUTH_SALT',        '1V1jRR=#{$YjBo%<7*Xof{eLE9?>wHWDEAn[TVAA|8VaZSNepoi0j6_h2KCH,exW' );
define( 'SECURE_AUTH_SALT', 'Dp(9l6E#tL$U4eDJ{4ngk)jzIFg$455m`6N9tzrEg3Ul^<:i.<szm&MxZ]>7b;v+' );
define( 'LOGGED_IN_SALT',   'Z<Z;{Qf-TM~m,emb{tNWhGCQQr#f&g],mK3va)&vhM:bMMwv<ri3OA_:8Qdm#^F+' );
define( 'NONCE_SALT',       '-qn)rYV;pg#G9%Q5Y|3OJ4~{7#}3v}?>h2I<Wy>Qp/0b?yw<a4h1IL+{uG(p&l4F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_CrTheme';

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

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
define( 'DB_NAME', 'Demo' );

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
define( 'AUTH_KEY',         'i>N0})!>r@s>.!*A!GjUoiQe5<imTt!pJe?LS,L1FvD.#HOyyLzO%q`C/8l18>nO' );
define( 'SECURE_AUTH_KEY',  'ccSF-e@7oR82xsZ.jb;-Ati4{VHZRev#g_U/*lZV`R 86ME[VY~:7YRopCSDJ?^h' );
define( 'LOGGED_IN_KEY',    '@:Yv v_Y5OuvS:$?g5%=EoMY!c1LMCp;0EMuun1_ozJd@$6UiVTA]ltY~sv9/41_' );
define( 'NONCE_KEY',        '-h)Z)}.ms%C$!#svtu8q83ZZs4yaJn^S;4U0LhdBoI;B)}NIPZ@G-ZV5R?oIsS}!' );
define( 'AUTH_SALT',        'ITRmYb[Mno$+?!qKKl&=!reReo8v$pG7UC2@y!!rt(f/#fx9kGFu9cEyNU[PQlAm' );
define( 'SECURE_AUTH_SALT', 'H:p1dVHd*6`w?f5/v*LU/@#{8|3w}|&a?D] u*SQu=;2Vb@p6r&Zm9jb`N?JFQ.p' );
define( 'LOGGED_IN_SALT',   'ILg?`O[pRgvH{UkH~M$IKYLC:^Fqxm|[$f(6^utbKGkGgk7*`[=4whB5u[h^>&4V' );
define( 'NONCE_SALT',       '7?s$$+lqQW=P;PP.&f4f%}LS|wJXVHuq)d)$^+;Rrbkwydiry.*YH{sfDytNcJby' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Demo';

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

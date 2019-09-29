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
define( 'DB_NAME', 'CMS-v1-16092019' );

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
define( 'AUTH_KEY',         'H[ dte<dhhPp7yyei3_|!opgZY7n=H^r4X9zcRFQ*s+T3#Lh yhl.=ZvRfPy[#ub' );
define( 'SECURE_AUTH_KEY',  'FnnC1jhsl;0jJ=,3zuZn*78BOSQk{KK?aRRt^= N-nldt1*ki|nQYlKs&8}KYdPk' );
define( 'LOGGED_IN_KEY',    'sh%/e+-ilz63BK@4>h5Rfa$a]lnA-O1W23,rRv3ag_]E$l4sPeo%0p8eX8^tXpMJ' );
define( 'NONCE_KEY',        'x!H?eaxeaH1D-KCeDEk/M=9]fq+KUfiI&z`HlSjS!Z2m13Rho%lI?vA]OCuCPi}G' );
define( 'AUTH_SALT',        'ZR3+_4H~u2z-J%B&t:h=dkO81~v.9C+yTXm{|JX=_adjzh{sNPk2`9wqo~y+kGv ' );
define( 'SECURE_AUTH_SALT', 'zUAF6fS*V.iu{6ZQ!%VJ:r;ypV3a.|y-qf~Z$.iXN]z=U6wSBG*0cE~zhHwV*El+' );
define( 'LOGGED_IN_SALT',   'qHLa9SlsCsO3CP#T3v:X91PMUKf9f Ol^/yDQ?t!YkssuFu++U$Iqw&UIqkQ;W*w' );
define( 'NONCE_SALT',       'E:_F`j-Zp|%gorIaPczm0<%[&s[m)0mR3?}ba5#TT[H*]x.L>+0sNQZr69$~l9+H' );

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

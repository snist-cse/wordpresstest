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
define( 'DB_NAME', 'wordpresstest_db' );

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
define( 'AUTH_KEY',         '#@d+Lw~xdd&evy$] [J7/Ur?0*Nk48(}0c{;Whf^FtA?LO<gxk]xFACD$v{7$6/T' );
define( 'SECURE_AUTH_KEY',  '#7^Eq;gJ$tI=Wk&TS1<}2iC#FFt U*!>]xe[3y(v,bAaz5Zv3B,AW1b,X>7Zha&i' );
define( 'LOGGED_IN_KEY',    'y8UONgZo$[y,Th~wR^!=HlbHDsT_AJbHP/l,7DXiyl:-a[&pVk85NMUQ9&JZyv;u' );
define( 'NONCE_KEY',        'wJLHeUS~nh?-LC=8+~(D%gR3_;.!fGc-cPURc Kz.z@]x)2?>aY;^ychv?CuReR;' );
define( 'AUTH_SALT',        'oed$kho!X@^F!W{0:hx=_pGVwjca@~D5O.9{Ic[|!e M/k89+t04y+XLZ5IG#]bX' );
define( 'SECURE_AUTH_SALT', '^klHE Vjl4&fUEY%K1Z`kLth{PxN~Onu,8GJa0:}aW#Q{emO$SKx(hK;hRwr25H$' );
define( 'LOGGED_IN_SALT',   '=|w@<{B#:NWl^PFh_rM oj&H(bjhW2hIg$~9XvPDX$F($Ui`&DRYe;WL.b1P2j8F' );
define( 'NONCE_SALT',       '0-XJ8/,EIN^FtgL[bjnJ%1re^tfazsO%|N27D4frpj2K]IqZ#Zcac@kI.sIBz|Fs' );

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

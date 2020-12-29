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
define( 'DB_NAME', 'marcsql' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '%/~vP/oK^>H:;WiX o,_> acRicI}BHH(~lzpnzP3k=|8l/wODC TFTT0O4gA<dI' );
define( 'SECURE_AUTH_KEY',  'DDTN`eZK!#v&9S6HR3|@uN:N,D-SYarD0wDEs8iRAEud$V$E9hehnke.8|_b,+Qk' );
define( 'LOGGED_IN_KEY',    'N4jNUM(wKv9W$5]}/hWM,Ig=]5.k=yo3La?4;woO,K^u2u2$`V$98l6+,eu4h$N~' );
define( 'NONCE_KEY',        '~|=VL_)xgwU18`-wJ~;q8|a`AgaPGmttHBOe1lpm~&t21tj.TdU(lgm.M>Dg@#0j' );
define( 'AUTH_SALT',        '9u6ZU=,5cE)f M#yJBg&ama65mDs<6{6avM4]/.#}riztqd#IAjXS`4}wFWdy>a>' );
define( 'SECURE_AUTH_SALT', 'Hn8_S9G;{BabE>$sQpa7rZ:_?#D*<0H,fb|_BeiXW=AXU>T2G`1g|lH9,gN]mF0?' );
define( 'LOGGED_IN_SALT',   'Q22g@+7+E88;IPh5T#m{()&|na-)qtisF#G18TWS:Rpw}|TJB0+8}3!I7v?[{tF1' );
define( 'NONCE_SALT',       'Mo_mF+,p$|2u;%rkL`[zyN~8KB3z|mo)1+oz6xM4[5hF6$$PiKYIqQ$I,~A<ywAT' );

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

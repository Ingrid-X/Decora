<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'decora' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '`^{C4QEFZZioi%we.h:|B0~sl)[+t7QE,SV}DCHTdUI1i8iEMQY&CYJ8fjTUU`-t' );
define( 'SECURE_AUTH_KEY',  ' i:T]Gk|g^8X$4|<ic[XtBqy 6b%ITJ|b.zFX],W-L5M,/eg,m{:|:-8aH[UU /j' );
define( 'LOGGED_IN_KEY',    'i!l1jS_ Sh._B)Ml]vm1+^->1/2X[>n=s30N!{[q3Q63@eU/0J+[J8i.IV$e*Js8' );
define( 'NONCE_KEY',        '2e*=Gz!R=gcKz0sxw]+b>KY$[7a3yR/cC]rfsVda#p-jDP_UA[c,]_1@LkewOK[;' );
define( 'AUTH_SALT',        'A d0Z/,wED%B}i@:/_lBEbkMLTgfKN=vW <EAAB}ENb]-S:(T9?N19~r/5OuK6P>' );
define( 'SECURE_AUTH_SALT', '5B2Xr[@at2o_)xBi=Y:|~{[V217-a#G3-:LgHhe#cunq/yAd!V=RbYD^5~8xMUz:' );
define( 'LOGGED_IN_SALT',   '0rGiaGdQ]I]mzCY7+q?3pk~{O/Q:/}fd>|JwR>&yaZj9P7 l1Ky&GrHR~2[picP{' );
define( 'NONCE_SALT',       ']0]v:+Hu}lefju(*hiAH)%=IN6jtlLpd|>g>fN~K?V`G}8cRn};tmj$IIbsqS!r:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

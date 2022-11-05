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
define( 'DB_NAME', 'createsites' );

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
define( 'AUTH_KEY',         'qP#}4f&}=[yI886;n.5[szV?6HTvc2di]Jym*^Bv?V]&ReK Jh<)XNDChk4w`8{D' );
define( 'SECURE_AUTH_KEY',  'l@nJICr%ntfPuTw=*uag7]kL{Wi6#mU},: h<Li:%$)sc//O[67#{CN{{4Ne!#]g' );
define( 'LOGGED_IN_KEY',    'Bw976X ^cG,;?88;)pY 0Ue4cD3NF.0q_+QL@>A9V|xx%-v<Jz^i.5Ee)TK50#Hk' );
define( 'NONCE_KEY',        'RQ{+2P,7}s$^89nY0@e@1lTuQqV-L3OEz|qKeFsy:-.+Bq<3jq;p}=a1E^b<TF Y' );
define( 'AUTH_SALT',        ' #}e1dm*obkw} 58Wn/nXnE?2FBZ!]9z8XBVakO)[`*u%-o2@!i=WGt}*<7[)sT3' );
define( 'SECURE_AUTH_SALT', '#-xvO*h;u)Ysh]>}g7_?[^~R+OVzHQVp:0ItM2kn[1h`QSVfnQ!l5VR4.myxP-sZ' );
define( 'LOGGED_IN_SALT',   '&G al5F3fF#t||zI1hS(w{Iof;<hF{3WHvC_r42rm3i.nLaR,kTn{kvD6BKi%O_f' );
define( 'NONCE_SALT',       'Gbpy?prGH5--hD/<r%eni.,tfT|SQE)EEA*o*U{Vca+0XQII8UFJbq9Z?$Ula1hl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_01';

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

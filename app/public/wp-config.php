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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'aAD&e634y]@kM~+ra]hf1,RNQ}E*>1Pa=x#K-xyu&(:0m#&R3JRBW0HwF6iEly>d' );
define( 'SECURE_AUTH_KEY',   '^uw[}M-swt1!@1dLBV6Udli*5txDU&!6x-,h%@*T]f!>~poWCq~aJ;>0{,ja:fLy' );
define( 'LOGGED_IN_KEY',     '-YBii7~9j*>e-+;<j@G?O:^/leH2-AJg=8~+$PXyK)>gS~r6,TdcT=uhbfXT$9-t' );
define( 'NONCE_KEY',         'e^o6k1U=8i6tS-ExAtBe>_sReP44K~d484|3)I1FP(i#>a+ydN*WVC!?1iYAwR.D' );
define( 'AUTH_SALT',         'C8[,yr4qMm`-CEm-/ZxgU?gq$=66~(DFyV]9Y]%t26#u%#H(Qh)E&Wa$uGW2.1P`' );
define( 'SECURE_AUTH_SALT',  '?UMVj#!ZGzzd1*18E}^nM@=f4&y>2iQ=}Y6faG$yP$T0+j9^;+#l_/IXsY3-B_9h' );
define( 'LOGGED_IN_SALT',    ' }s`?L$s<up7Qj;]+n/7NZ4t^^-}*hRQo?uuTW0NYM67xGWf@n&O5D}LmNpM`y1!' );
define( 'NONCE_SALT',        '/Y@gdw-H$dqSzf+WR30Vy$O=vQB6:#0c:IQ7iir%u0(pYbj}9s iQVK7*n>+`BQL' );
define( 'WP_CACHE_KEY_SALT', 'kSf03$Noh2@}V>cLm|zIgrb(dwy%kkIeFL,U`[qYuzK=b$z/1^_dxESW2pq$ib$0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

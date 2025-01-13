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
define( 'AUTH_KEY',          'xVCx,L@&a8g:qBvVoi,1g~EO3)M~#Ig}<{@w~VTOkslJA m@0-3)c-s+A?i!Z-<X' );
define( 'SECURE_AUTH_KEY',   '-=h^Skn?9aA5};$u/0*?LoIH_.f:?Jskw`<FV08=$N77/ei!!PNOY`1A5R3TRi`J' );
define( 'LOGGED_IN_KEY',     '<8ezC8%^FR{2^SI;5,T$t(1q]RX(6NFs*cYct$Yl:rFTF/!M/cGtgp8I}hMk2)Wi' );
define( 'NONCE_KEY',         't7&rg)nLbw+jNYppLgZ)5Y58Uf|T=Ly0!!?|d~O;IS1s4Sc^<c=/@H|M86F<yJ_R' );
define( 'AUTH_SALT',         'sv{y,0Yb)E-O=DjKE%y-p7zj>/(-%wM!9W^+$oK10d.fyc$913MZ$]Y.yLNfcE/r' );
define( 'SECURE_AUTH_SALT',  'ZdC05$sC5d`csC]NpU#fU02Bs4sDQ8=_Es)Hx_-+GqY2VcCp5@#`Oy.uZ%>MhM]<' );
define( 'LOGGED_IN_SALT',    'E >IRcg[LJ(^NK7$pm&Ye]n/_7{(Bx!kfL(0enQe20Uh]8cs53?q;yUFuF,GT=`/' );
define( 'NONCE_SALT',        '/1RkG#XRqtk_E=0v7)n~Ee%LncC$UH7ySH{2.@kPJp9?nzt^G[fB=`V9t_RHtsmI' );
define( 'WP_CACHE_KEY_SALT', '@y?jBgt&2=LnDa&F/w7Y7$<%}9VG`QKuZ.u[gr`@*D/![aegP1g+|wpd~<arrmOP' );


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

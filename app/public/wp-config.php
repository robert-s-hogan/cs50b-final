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
define( 'AUTH_KEY',          'QPkha{s+qNGjAR5b3Du0fy4R;u h|s!OQBEhw&P%r<d0=B8jMyDyfI7pq@i?25O2' );
define( 'SECURE_AUTH_KEY',   'x/ pxDjj_9zSa,zb}f<Lr!_`p<x{b&+~Z$<M*|Rz#-xrm$>1Z6>e)D6A7Aj/wu5f' );
define( 'LOGGED_IN_KEY',     '5@4/t^oGg>N_G1-RiC25{Q&V{FOGT2f$!rOFQ&L{v1E4w>,<kvX_&aA4*Kq2A9^#' );
define( 'NONCE_KEY',         '?,!,vF~AX8`u/GJlzMKc[f#jyQ4.F;yC`WL7,}j^zhNrOJjfBA^}0R}eOuVUs3BY' );
define( 'AUTH_SALT',         'u27H+?2Xf:yl*,}X8i1xRxe[}DwD2M+:VU(Cvc$L(dmB:kk;#vvw:OgNkFv*P>{A' );
define( 'SECURE_AUTH_SALT',  '5yi[XW{$l,!3PDuJ7EBU@@iGe M6MB<m5yA1vB3ee$+V_Iv-C6]?qJp/yK:R<mFA' );
define( 'LOGGED_IN_SALT',    'i1 2VmZz _oSE,@^0pkfLf@),X@-hY9NEo=P^,>G8d$b})U4~qf3cC?r(iTL7Gns' );
define( 'NONCE_SALT',        '?>.}oG.ICT(XFD#4`u[iJIlXD:Ocp}QdR{5+iOsu-J/]Bj]V@4Xpp<HT5=[ogD!z' );
define( 'WP_CACHE_KEY_SALT', '.Q]:)@xxi@CU(F Z@SRM3u[$!LkH`bF89&}0ZU%(DHp:5OGR+&q!Gv6{pogp.(VI' );


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

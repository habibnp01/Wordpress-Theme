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
define( 'DB_NAME', 'mohammad' );

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
define( 'AUTH_KEY',         'M9Qg(B?1ZjS7:LCeO$~:Y?(b#Fc,>cLF*M6jtdLE)n.VlWso8>2R:*:LSd3+M[(f' );
define( 'SECURE_AUTH_KEY',  '2|&.`Cx[<~s*4V%*a=2?;t{gj#|1*3D$Gm!TOo_Edx@?8PlAI)zq8VjsjvA^.sAB' );
define( 'LOGGED_IN_KEY',    'fmQe~JF1;kWw!cv?tc4LLpBAmfu!Ra96=dMMX&[7]bvw$E52Zzg`-2{xU#]wNO)u' );
define( 'NONCE_KEY',        't&;g`cvkGhp=s~4KB1PECUW|c f]-2h=]Y$Msl GT,wg20SpRNuN1pxTzqhW]~cf' );
define( 'AUTH_SALT',        '-P&-}Tcu2!u?:0o*If2aPQ+NlfhC.r+@=)QAE,yVkGMF !cY:Y@qR_.MYZR;N4[U' );
define( 'SECURE_AUTH_SALT', '^SzVu2FRs)C4:{_M.ML=NndEf*M)0c=zbzSt<:u/vqvlZ2jI.>{T ^&<rx(1^c}l' );
define( 'LOGGED_IN_SALT',   'FfdYtx{auA=m{VFTrPnM7S0SR=NJSZru.aeG0H&J1b*A6{1nOLpK;eM2zIapLS$6' );
define( 'NONCE_SALT',       'GipwxHO?{3KTVS@PCm2wexc_]oEu5MIX5Bf$>= ,G()X`Ewu&*r%Ox[8o_,S_p{8' );

/**#@-*/

/**
 * WordPress database table prefix.
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

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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'localhost' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost');
define( 'DB_HOST', 'localhost');

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
define( 'AUTH_KEY',         '$NJAb^VS_t8-y0W!m$p;N>hVQTkGH[yyk-D:.dd:j)YF:XXv4A^FkycFmCj B|sN' );
define( 'SECURE_AUTH_KEY',  '~.VV@QJDn+!gzs1t1~/T+|aE?sV-w|s)6xG>3}_cDf&^X|x*)4v39^x*:;1--j&0' );
define( 'LOGGED_IN_KEY',    '.P4M}GySafy XvnXKV4*jAJ S]Oq~Pei&:@;uAT+ )VJLTf:zuMTs3w- Sk=QVCp' );
define( 'NONCE_KEY',        'k%2vRKN8g,i*=[c%+W$`xBai}K6m28Qk~lY5>@etW_n`rZ[^K<0bN7TaUf7P:m78' );
define( 'AUTH_SALT',        '=|hRQ]Wv(*?R*9AC@kCtVw!Hbqp$j*^[coT[IxZ+bFuMro]AI9u4Y<`:GAZGX;MW' );
define( 'SECURE_AUTH_SALT', 'a?zoz:$k)6~o/N@=6 (cFe!-0s$V_$Lh]<(8R#A%An7^jX*]od(wFX$tY &EgiV%' );
define( 'LOGGED_IN_SALT',   '4OMp_hR{3tMl@i7Q?Ve|xo~l^g+f6,;IA_z<h[S+AEYv6rlP>#2H7-u*];tysYu*' );
define( 'NONCE_SALT',       '5>fuOPwqtyVx&Iomu@BAZN2;Ti5>:8|Z!>5+!5?YyW9&Ri.SB,q(#(jYWS6nl_a}' );

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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


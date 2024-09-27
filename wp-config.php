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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         'PQ37Y?v*4e_c~|/Lcr%24&(Qw!{p<7W7j)CJ~cO0Di!/dzgE4+QT7qZnA*}mi<?^' );
define( 'SECURE_AUTH_KEY',  'jvu]Z L-!/v/KUh$9mp=NZ`+|NH?oFYY<bRh7;&,x %=AU;X-tSPx)cvucA2/~( ' );
define( 'LOGGED_IN_KEY',    'j:JwDgxUNklt]SRHFSr_;fc!l7Jyj}o(gH, ?VmOV-.i7L1CwW5PT{k/G>-^1u+,' );
define( 'NONCE_KEY',        'vQPO%N$Ee09ZWCGg]mj; Rp$2f0`mEYh;L WqMN401_KNk$bk,BN$ Z~7G:5HSWK' );
define( 'AUTH_SALT',        ')vtlqrP]YAsAr6^yvr/WqjF`M.~~yR!^G^@8+]53V17cm^C#PBmCu&#|gY,*#Q4(' );
define( 'SECURE_AUTH_SALT', 'xGX<pyi{PH!6|#;q5# .Wdl<7jqwS`.;d<aL(6M_Z&pq;n=u:`9{0Q;WLO3NT-*e' );
define( 'LOGGED_IN_SALT',   '?QR8:m~`nVzZ}RLFQKXGU;TR8=fr2~D*S:y(5Y$7rX,Z=a2Z;=CgR}A:l|:%K?+$' );
define( 'NONCE_SALT',       '_%NvF825mLwC+TGI83jXx:]dH|JZ]GOptGcAj%$8`}HtzJuawLai=ghF#FHE&Wyy' );

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

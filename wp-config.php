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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yousef' );

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
define( 'AUTH_KEY',         '/UpXn}J-_B)RahG;x]vXOX=0{y7m_(].>7vgnkQ,+qDx2F]5mTP%QOWBQX(1YDtS' );
define( 'SECURE_AUTH_KEY',  '3L7I+##aY5RlQpnzH9owDSmliMeOGE$~Xl?bxf9>,h;r92FQEsGw-p}`_.nGdJ>O' );
define( 'LOGGED_IN_KEY',    'R*54|.ub<Kf{:2?WElb64Or<+f[6=:.@,#Wy6wSzr{O8#fq_+O1R|9S5Ynlq-6X}' );
define( 'NONCE_KEY',        '4gHst6[kdMxWu:o~h|F!bAz?2Q`D/h=*uWGbXU7D [~kX|_lnJuaYWW&aWSJ]x<)' );
define( 'AUTH_SALT',        'q8=tEg)06 Bo2pHg$N?rO&gHR*D{Znc qF.ROA;iM#9ZtgF>_.u1Q#q?qwv#L?_1' );
define( 'SECURE_AUTH_SALT', 'G,wvJ}}`Hd>K0A5CQd`{,wQ*^a@>h8-hr(HRix0#<9B|.,^vj#A$YS6-,5m>+`xr' );
define( 'LOGGED_IN_SALT',   '&:auXEuc$!*)lhj~p%{5uvaWURl)d+cN>L,zF#a#8?l0;4&_hI.1 e+q/)Z>=a=[' );
define( 'NONCE_SALT',       '[qJn|8W`|Cr.!D=F,ok2?R57hGy~N~9<g@+s:y-[PVV0Y]5=3m){>/8tQ%[1V?o+' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

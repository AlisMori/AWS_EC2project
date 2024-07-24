<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', '/var/www/wordpress/wp-content/plugins/tenweb-speed-optimizer/' );
# END WP Cache by 10Web
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'alis' );

/** Database password */
define( 'DB_PASSWORD', 'StrongP@ssw0rd!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

define('WP_HOME', 'https://photo-hub.online');
define('WP_SITEURL', 'https://photo-hub.online');
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
define('AUTH_KEY',         '{4<|42sk-dW^m)EuCFO(>eR9#Fd?IFs1vBsACjVF,)YO#Tb/eiLd&!|5ZnsT8p!2');
define('SECURE_AUTH_KEY',  'KA8p}CnRH IS:.TMvDKcg_9+`sTOlAw9+<58Sy-- -B*O}/5)TkX(dVNn7dI: $M');
define('LOGGED_IN_KEY',    ' %A%-#i+Cz;FAV%l{+t;JCC=RRyn,o]hCWY4VX$t)|K M#S ]_qM|7i]r8rkwdzF');
define('NONCE_KEY',        'K@j+VRS#NqQ{-fIw|G#KZ3|=?e6`{4CUUoS;#{RzD`}6<>EP>s?r=ibIPf)~M%j)');
define('AUTH_SALT',        '7l*i|ni4$0.jV+zZKiR?D{L+4vr&VkR_rt+f`]OXw0`Et1{dGZIhv]S:zPvM(y;f');
define('SECURE_AUTH_SALT', '(t%:LgLsRNxs?Qw|jqQ>]!B+3c/QL7ig-^:<4hZ>6NqtBoWq;f1[uwo*c%?GX9RG');
define('LOGGED_IN_SALT',   '&z?TOO#)9 2<B6udG[qc|vw8`e1?a-]oukqBpWgEI|EoGO@Nj C{+e+S.*Q/.9U.');
define('NONCE_SALT',       'YKz|LQ)`x.Ikj8y9Y4JXA-~qO!:Aaa${{D:|E*0Kz[o,hgp%`s1NenLzrD)Z/Hy@');

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

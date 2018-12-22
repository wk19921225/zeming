<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME','WordPress');

/** MySQL database username */
define('DB_USER','root');

/** MySQL database password */
define('DB_PASSWORD','123456');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GTYmPSxqF+#-89bc^:U-E~QaA+Abp><eFK<O|R=3`CJ8?GxqSSULYshY#SqGIW|j');
define('SECURE_AUTH_KEY',  '~rT_VtRn w&d? 3SK a^=O}/T>o!-(rHVLz_*a #xx) j+Zuw,TKLv#al/`7J!,P');
define('LOGGED_IN_KEY',    'u}h*}_+~VkRf&y$S*GAtFCoWFVVbjo:/`4BpacOi<{YSE`6u~/0Gg:5bNwW 4l7r');
define('NONCE_KEY',        'n :6<jH8-*BY`~C175)nzx>cd|zR5 )PO2fW85t|h<-?Z=AL1?pw>IVT6T*Kos4T');
define('AUTH_SALT',        'sz%/!?Y^qeI$f#>gzsx HB&obglAh`~0^ybh?G^Vd+bQ`O#KfB7T oTG5ro=u@9K');
define('SECURE_AUTH_SALT', '4p@$d{bfl2P&_LI>K4J:63A*Vb6*Is-q/;BR4}i;nHZ~BZEmVrqf?f,#>y&?.Cog');
define('LOGGED_IN_SALT',   'ANl0|R7}O8$vz.+Q=H)2-{ hY$bE+;`%d]q8%P1w4YV&:41ZmZuufJ<qXRj-}:>M');
define('NONCE_SALT',       '<i{j#oD.!`./A!K&w UkaG&|Z(&*/,r-izAHhu&w]{Jp3-VdK+|G${>b_scVrPDj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 */

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
$pageURL = 'http';
if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80" and $_SERVER["SERVER_PORT"] != "443") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
} else {
	$pageURL .= $_SERVER["SERVER_NAME"];
}

if ($_SERVER["HOST"] != "") {
	define('WP_SITEURL', $pageURL);
} else {
        define('WP_SITEURL', $pageURL.'/wordpress');
}

if (!defined('SYNOWORDPRESS'))
	define('SYNOWORDPRESS', 'Synology Inc.');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
require_once(ABSPATH . 'syno-misc.php');

define( 'AUTOMATIC_UPDATER_DISABLED', true );
add_filter('pre_site_transient_update_core','__return_null');

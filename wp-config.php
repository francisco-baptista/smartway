<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'smartway');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'blink more times');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '(3[kWP<IF[BMT4LLVL-DK$UlM:u}n. dj#<<WzSceB $(m@[;?vTfQ<8W ezY(ei');
define('SECURE_AUTH_KEY',  '9fqSI6G5kby<h)9{Qt!4 hZnvZRYOvQnO8Z:=B7yx(}}%Qk+<uTIReR`R*rc3{@r');
define('LOGGED_IN_KEY',    '.cXRV7+P3B#=CR9:G@O7w{UIg[;sbu2K{tGs[>M!vSjyuBd{50,ZT4i(HByLX~Zh');
define('NONCE_KEY',        '-?WC];Taj|r}-GBc`cL.i#GPR`~n&$@`SuXuSHXOqVDA#)PNb#v*<d&J_HB~eSuf');
define('AUTH_SALT',        '[6!8Wh:K#-<C!]t~NB[6IWQ]p|?-qZL)_W][gwLZsZaWcqLVA*#ud9}6ldaa)n~D');
define('SECURE_AUTH_SALT', 'ub[@*W5<yW>5]L}Y:#zaC~Of)ckH`f0T8fj+sK,gs=2z]X%vlgsv!YK:g<BLpQ74');
define('LOGGED_IN_SALT',   'U1b0p=XZp8:uR=ZMWYhRq,LrRz{=EUG:#vT?ZXJUVV34!~8;3NvsC%IK}^R3/0P{');
define('NONCE_SALT',       'x3fxtp7hB/W`<*Zk,HYn=_ki:Z$_^KZb9marNKT,7Iw&e&3l9Bk^j*|PRL2<5m{i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'en_GB');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'onedrive');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'BYd60PNFPNYo(~gj]=k&aZj]/3k1fi<5~~0t*puqquT[/6[9eT_6_^6~-F[~~?gg');
define('SECURE_AUTH_KEY',  '8zp{}t}yto^<>Cd(:HZp&_pm_wW!$`$A4$%k.0tpfdlp PxL($dD6hc[Q=nd2r($');
define('LOGGED_IN_KEY',    '`AGx%M4<,4uk/7,4Y|5$.9NZJ,_-5 S2RlBH<~@w+K2*_SN3g6SyAVSvQT!9t}!z');
define('NONCE_KEY',        '(lHcs1TH|@Vw1/qi[GiPWWm)S`sFh i!J|K/0QT@Lmo(E&*c-kqigs7|m[N)`!#>');
define('AUTH_SALT',        ';zNm4hh8Ey{|R}u!CMoJIW*2u96,eXzif({` FeDe!pIu21D[f2[*YBss%qhWH3l');
define('SECURE_AUTH_SALT', 'B%47[p1*`0ZJ9V}809,im<uK;;Oo2{6P<m[?Pgg*UkQ/ZMz^f!7-+V3?B?{GQV@:');
define('LOGGED_IN_SALT',   '}hkfa/TN#[EH?N_s}NGYQR=dd|-01,fpDq23~pyF_EB=y`~=(iZp8a/SHhFS,hE/');
define('NONCE_SALT',       '+dM%&=2fuXt,g=+%(d&<cxiizWK284?N>vcum2o,?Ic!KF5j4M&,ibXj!*inrt-y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

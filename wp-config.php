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
define('DB_NAME', 'BillsWPgitTaxTest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'zK|5vc|{o$Hp$E&f_]={d~zBF1%8N7$F>c2~t6O{8$_xz4e|,F;pv*Ye5Bu8Q&55');
define('SECURE_AUTH_KEY',  'y%yD1x>llKlYjfhWC91=!4Q0y<G%,[u=+$F$v.Z}Hx,Q?-+oS<<Q@mSgt2M[%&Il');
define('LOGGED_IN_KEY',    'uCc2cGsoa|y.B+pK,G9<Q!0x.D__)J@?F g{6^0jB.YbZaWGD]$I5FERao#n!d.l');
define('NONCE_KEY',        '_QRLzO^;Z>28zFK8}TR}6lm$.iw ;2m=R8zx!c1.#V_CUGr.|/{*= m)HyohbK`g');
define('AUTH_SALT',        ']&rytg0Uu>%mq_Dz67Rrhta`W7S5OY/*pVS;WvO]ET{!`>H,mUXRp2*q20`[Rv?-');
define('SECURE_AUTH_SALT', '*$hBl#7ke~~_)(t|EXg66Ys#aEV-O-:(0+@6rw2p_xMfGT=bF8sd4^v3%LH-sJ*6');
define('LOGGED_IN_SALT',   'La$oEvbgpTse+;azvAotk-Q=)1FR:5#sQCuYie~4a=nBl(Ie22=zh?FK$-!biZGK');
define('NONCE_SALT',       'AKtBPTg)OAMbib3B+h 1&g#0Vo]?Qh:j}]ffoL^@UM9Kd<[~|Ranz^iJ _MJ<9MC');
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
define('WPLANG', '');

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

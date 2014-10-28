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
define('DB_NAME', 'MidnightStatic');

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
define('AUTH_KEY',         'Ij%u+9-]-;*LAk,aU$Z>cdEOY0JU:UH5ecSH;I@f|&)LT2a[<$|me{rX[k_0B$Ir');
define('SECURE_AUTH_KEY',  ')zMR^_^$PR$x|^9lU%ZGjgAb>?a9n|&t{xaj&[vH {p=ma>0`-oK)kzkR}-.iT:1');
define('LOGGED_IN_KEY',    '-HdK>^A2CF`*}f )}o<&yIT$Y}Z24|eA8mz<xv>>T4_:xI)Yp&EI2&|]G2c&-h$`');
define('NONCE_KEY',        ',!,so<(%zi~CePw|K}n%T..>jH7TYLLclQI$qH_o/]v}Dj5VmYgP+X-8asp] E*c');
define('AUTH_SALT',        'xzfzpyO{3;$m3,.lkoM?N^8?yhrD!aBwYe/hv?iYT(|F=7 ka?|3g=p_/f?>A)vN');
define('SECURE_AUTH_SALT', '_ {xUQWj1W*|;XV!]-jr8A9so8.q kpF8.KXtgaic!rRFX|K>/;xVe*+Y0rG6LFG');
define('LOGGED_IN_SALT',   '!2+v!Z(qV=m(1bBm(4];5EK^jhdE{E*gA<S-7b{6|+{l::?.I:hMvS>|%fd%=Zcz');
define('NONCE_SALT',       'KQ--XDk,?[V<v;a-EXI zY|]3Z]|iSZ!@z~a|.eVq?b1I,q(hj?E`mLk{p9dZ.6_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

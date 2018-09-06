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
define('DB_NAME', 'wp_workbench');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '/^Pi|%LN`R8u$ci(k-.<kj9{t-&3OJ#o!(}L=y@2J#S+{TT M9,M{Tq@zu;>39fs');
define('SECURE_AUTH_KEY',  'f+2l-nC^O*.ofofeLna0#c@M4N{S^1m2WL1ps ^k0*m=%DoN17kp<xXx_m^W=,2~');
define('LOGGED_IN_KEY',    'f4FWN?~x7h5b=MaGED[cG`,H,AMx0;0f,0aM|-2#kT$K(T)ugLP|lC,2V@a*x]C3');
define('NONCE_KEY',        'KyYN8DOrYT4^ENR`+s?#az%mc`RYWM=7-b.O^w W$}BI7?ywq.T Dob%[@J8@!8L');
define('AUTH_SALT',        ',vHh4-~]E5l#pVC.M/RS=$-f<a){7Gux*=sy2AuO<xE#,0|tA%$^m9 8d!JFf+us');
define('SECURE_AUTH_SALT', 'xc*Z$Y#!q!b.RcRI2|8Op:I>~=|KBme 91Ao:2l!uF;N[XSx2$D=AoZ:> NP?ts(');
define('LOGGED_IN_SALT',   '/77pi$&!WVFeEqxpj:x2m[0;d}N;o[oB[mG0D@UVW5EY1OTIjt!is9.RH;gA2<:9');
define('NONCE_SALT',       'Nq.ST1rp9%F:,=Ub#P2FV]=kz:ZLEI:y(OXPi[1hzK7`HLw<+N).sI_;]llO+Mh^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

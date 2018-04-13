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
define('DB_NAME', 'hhh');

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
define('AUTH_KEY',         '1fnT|41iB6Qf#|h,.Ky45q,MWo=WTD{gIgPC%&NOzcf;a TnJ#R`K)THvdKo=v6Q');
define('SECURE_AUTH_KEY',  'Yl>xD{)~/Yj%upUm-01>y:,*Kv&!zR6-vbNlS/6)?ldc-+*FLt1I<CL=~~O~$k#L');
define('LOGGED_IN_KEY',    'nQ8 U{Y-eesN/~KnE6tMfiWMf`S](K|5$[VYS(K^IVn!R:ih|Gp2?BR[.B|MD`]y');
define('NONCE_KEY',        'F.#kPvP%^_kFTOQ5GZ~~<ngUIj+oc`b{L)VGu,@;X;K+,1 )gKkjWUGpOVVpn9YV');
define('AUTH_SALT',        'YbNcXrBb%7c[7jMC4<m9VuY0jc}f-}Az2Zs=?;{70qa4BbR#^4(paR)-<XwfPKo2');
define('SECURE_AUTH_SALT', 's@WL/ ]`%pT8KG%;280>THZOfo1Py/4 [{!Lrbe-]oyusdXaYiE#U)Q7vcL|vm|~');
define('LOGGED_IN_SALT',   'SV(O-~GJt<QzFjsa -cjhiGRD{!Q<od_kQEyi92YJcZczMObANzr`P8A9[7Wg$8n');
define('NONCE_SALT',       't5Zg.q%7(Bg)wG;HQ.DRDZ1lmgid<a=Ha#BO5gM[XI/?av&O,xHKc+veal>~$wgY');

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

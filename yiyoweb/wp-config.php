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
define('DB_NAME', 'yiyoweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4|{,JJ(+-!-Zauo>nKk1b)m,hX<mXd(y*,(D-e?Q9t[v,6`1j1(sKMUs}@o[ k+k');
define('SECURE_AUTH_KEY',  'X$!`I3wyUoHI.JDpSlPgyF$O=OPq15MTTi%G&2[`PG55m.r{va^^X0o>)2Q/D]1e');
define('LOGGED_IN_KEY',    'v*_+hFVSPsb-MZS[>iY/8rQTlfpxc-BLgAY^*<7ujSv{y:YV9AJU+#%(20.5mHdd');
define('NONCE_KEY',        'h,z<&]5{gftfB$hC1%lwhsjE3/OKI%Z`pK$i50ce!KCO?d.n~$yQZY #auIOa{qA');
define('AUTH_SALT',        '^uHIGm&nr^?bIp+DQ|ed>rnN;Z4g7itL$:8UYwNW8a5GE>u.6!9/~P920:BEo5pl');
define('SECURE_AUTH_SALT', 'm2j[bag.30bq bq1Bi!Eee2Uh1[Q`-$3Ydr46g/8MD[,??g-(jc$WcPp040tT8rS');
define('LOGGED_IN_SALT',   'M( >]iJ4odU?vI9IM=2*7jQ[-I]Wl:F.PV>g9w`=W> Etb5oJZ@~`}XN><C12g*@');
define('NONCE_SALT',       '4Q7Ns+F9KZr(=Rupfdj @ruujDz)Y5^9J_]N2nOq55_+A0D(GHi%s$fCdM)jS5?=');

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

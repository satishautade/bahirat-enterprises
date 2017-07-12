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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bananas');

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
define('AUTH_KEY',         'pU%?SC^Dm,6Px@Vfic2xU.T2HHxbvD=Cc-GVNVz04=gV.>T|a(yy:xcL&<`x|e>P');
define('SECURE_AUTH_KEY',  'eJBt9}AyVBuIdZE=Li2{;pI~}^#p0& MzR} =U{h9ba4BOWtBi8ER@YQka_O`Jf$');
define('LOGGED_IN_KEY',    'o:L1G@D`NefdE5BQ_I;]*@C/gsk1JTgyk3avi_i]NQ/8Cze#@B*ziyb5`5JBE<73');
define('NONCE_KEY',        'Op$? AzYqFNWZ*]];dLn_=@Ys3bCk=U<T09,v;p&pba3W  N|iOM[JsaSl|G&cGE');
define('AUTH_SALT',        '4(Ua+* -/],,lt1%xk,~h+~<Fp`I#/UFswb`[iE[m 0r_r:xJzruM!u3zWO:cG26');
define('SECURE_AUTH_SALT', 'U`Xdes/(Au?zw+xY1U6#2q!I?VTd;-/t)Z(i=va[TEMKqry:a)}8:&Wfb?7ZB(=Z');
define('LOGGED_IN_SALT',   'C*2g!-dy3i>^BTz`#bz=[!(aitck1%wvL^@>loXmNz8P5d~}It*^Hq5]H:gAs{rp');
define('NONCE_SALT',       'C:%k>g1.pBID^Tc@c/y!pq90=&0MyGNQErL?;6v9mjaxnd:*>:vTF^pj|d)AH9MJ');

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


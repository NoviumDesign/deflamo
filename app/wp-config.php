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
define('DB_NAME', 'deflamo');

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
define('AUTH_KEY',         'j(D2%z6wAmku+w>pp{<vEMQHdBJ1Ipr|!ymWOG7G9Am>KB98Fn(5V0?bZi@a`H-q');
define('SECURE_AUTH_KEY',  '6F@OZS/)g_~ rYX-)}(?tYXwNsR#%1?U67jhxHIlDz=B+ MBKj$9h&~=@b+Njx&I');
define('LOGGED_IN_KEY',    'D7)8uMcxR#6ok4K5GM|up7skzv[R~[W+2w4/]F<WNU5gyz(*+XTg#2DjD?BeVi&{');
define('NONCE_KEY',        '[K1Qk>3Nv++i,Dc&;hE;^2KUfR`hk?q2[SKq-$}L:=-$[H{<ER5Zr+fO1m#KEF6~');
define('AUTH_SALT',        'U2=YBLI|y|||blIDeOK4fL,`$uV<0S-m%I.K w@d|kCGr7-zb^eY4q^`C^tU1&w;');
define('SECURE_AUTH_SALT', '7gJkrgL!}D:Ws|d]#8D;nzqlF}fYqga#mhx1:ILsF@nI8LYn8qv;@}(Va;7.F{ed');
define('LOGGED_IN_SALT',   'H!RSnj%GH+xF&w8u4@`ek1s}5K[K0z?u(K:CCO$2dU|,`4&)-)ew=KC:3Mk,:5Le');
define('NONCE_SALT',       'M0YF#M+fXdl koEKx@iuXX~mNXS|+Q$W)R$J@j/)9c+*SXGn]*f@LN>)C/zgm#mQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'deflamo_';

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


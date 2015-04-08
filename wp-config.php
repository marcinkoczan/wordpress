<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '!2S6%x|}R4G^kv4Bnxih7:-5_ 6K/=-JHo42pj(p<8Nyp,OwT lIN%peI{+E6(Cf');
define('SECURE_AUTH_KEY',  'O0k`aE-a]ZFxa5/Sg_ZNV/DX,Fc!2}zOw{c@RM~L3mm3OnJPMebB[Z?Jnc2l|I&j');
define('LOGGED_IN_KEY',    '!vU(^TNDg+%]]HV;g+0G/+UTD4y%Nbl+P;&6ZJHJ<G-32xt]?*}~~p7A&PrQ]%i9');
define('NONCE_KEY',        ',CNLA? 7&o[htCG27[Po@QgH[V9GE{|iRHd`SlzX/HcQNBZD@5>K8$0nzBd[4[cc');
define('AUTH_SALT',        '@(Aq4kG{,fvhGcEKor[Qy8=ny@rA+XIW*oT&APUA#.W5KG!6LSzBpUm_tR YB 6X');
define('SECURE_AUTH_SALT', ',d1e<ai$?w V-{JVt <Zu>`k$Xj>]A764,?fV?}]PMsoAZ,r-|]Z(F>#]t%$^#!+');
define('LOGGED_IN_SALT',   'dc|{L&]hL+<CW=Mn^~!LH-F+_3.IqMm><y[#R0{~;8L^q.OACEZ =]>1~eFJF95j');
define('NONCE_SALT',       'WK)W*NZD7Ae@)_7+`Ry:8s;R^]|0K>:MI*kw+|rI};15]h92/4OQS5M,HTj3T=I,');

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

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
define('DB_NAME', 'arhburo');

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
define('AUTH_KEY',         '4.ywX3$sC=Og;DE8`k<8dcZ:*2I2CB+}z:-f-st6+Uf7sTZw`Xzo!U=by5&*#?0_');
define('SECURE_AUTH_KEY',  '%1MlAPpHP0>]:K:z:fMr.O3s6TMw{T{V5<lTie=d|f;OB_U5+,hH1~Bm@](Ir>zG');
define('LOGGED_IN_KEY',    '246@4/eH*GhOZCeWGCOm.*E}yuO7-BR>|:ta^uO<-48E+T+Djw!3lw#m=+K:-qpH');
define('NONCE_KEY',        '[;T=-Qiki1WtD<>3MlG|@VE(*D^@l[w6VZb._ApF&a>uv-eB^4Llbp=wc|W5B|z+');
define('AUTH_SALT',        '#}K1><gIeq%Yi6<2[m|t6nD/sf!^W8>rQ)`BBu=bi_2m@cAP0X)EZdm!7CAoJ)Tt');
define('SECURE_AUTH_SALT', 'wx^F1*p EEPuM@2(=aj;=fckJlXgJsyL:3.xU?o4KdT#!Etg7+}EfPY(]2;F~9d1');
define('LOGGED_IN_SALT',   '3-|k>-)AMG!)((u<!*Z]DiCuaVP=Aq+9XyI#xH?6R;r4L?u>!AVSY`(^[u2~BT*I');
define('NONCE_SALT',       'i#PByRFt`Ux6tMr*WmM)F/ebdZ8wUe^|K)g:).G}2Zpnog:>zmCHzM.z8Qo5H?+b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'arh_';

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

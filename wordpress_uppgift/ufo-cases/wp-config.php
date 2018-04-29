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
define('DB_NAME', 'ufo_cases_db');

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
define('AUTH_KEY',         ' -e21)l~=UwCsVpn>WqFB(|M5!0Ai[cJi(-4*v,Hb,hL]~slW{,y?rB}bTv+zR%)');
define('SECURE_AUTH_KEY',  'Ltx)_em1I(*3$_A[^=r}vwGL Zw&s;heWoo[6Ir<gy>aywcEo%4O,EpfSm>>[_}9');
define('LOGGED_IN_KEY',    '&<D1gW62%=_4S,1w+YHO0wv6[#jang>} >9^5YENGw_fZq|.g^!rwxm,Y!bQwy[i');
define('NONCE_KEY',        'QfG:kH&*g$dg_guI3%s]T:T^} qI A6xw?wJKVOelYOb?ICv}[$6krN=r$A96h3F');
define('AUTH_SALT',        '%KEU|syS[A{f=[2>%cRPhgjC~g`grqXm=uNL%qe5D7h.Q96$|@qK<FBT7OG7rP0s');
define('SECURE_AUTH_SALT', 'Uu=7VhXfiw*Woa)OAHvMO3nk#h,ukmS7Eo@S1E46}]v*19i8k) W(+0<el>,/1yi');
define('LOGGED_IN_SALT',   'bKo~zr?G+[>t>T`d[5%b(8k~xv3].w6iP]MEB1b`Q1Ej*cTtp,Y}%d/O^~-+B6-6');
define('NONCE_SALT',       'vn6dUK48TC6ig+P5X<4 IA1^BF<I$D>>Ch#uor>Okr=zU8kro.+IM@ysMpp>:2U=');

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

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
define('AUTH_KEY',         '+:]uc_Amdq3jyh7x/3?n14D^jm+^7Eq)K[A0YPM(LWNfHia0A6&Bb41@Cwx2sI+[');
define('SECURE_AUTH_KEY',  'ovdt5//0o0;CL*]F$eo;dqY8C95WqGn qeQ{d6&66PCp@gl/&+=hG( 4n$]/CL0N');
define('LOGGED_IN_KEY',    '0KR:ud~zR*k2DE-s.2?`]!>b|s~usAGl*}}PUH@L(*mI+in&^?rVaK(fz2kZV6&m');
define('NONCE_KEY',        'OCIVi|poJ[SoZa=O9jX99f*l@,%AYzZn>0zx|6t5TxNi.=5mqK[0AX.^8Ow4_}__');
define('AUTH_SALT',        '`9iv? (#kfFQB!?@/y_y4]~g+8G^NrfU0B{x62f;eV~T`.n89+%HJAjr1FTk/Y(J');
define('SECURE_AUTH_SALT', 'ws`yXCkd]c,LLYR4WGqy++tYT+=Dr!po c;8 $*@oQm AHbXH5t|E_f}b#i5RVbS');
define('LOGGED_IN_SALT',   '>9w^qW7-Gn:oIo7nDtxy_~Y~w_dRHDc:bvbY^kdh=)^~z=0bbmDHIL)2C! 4|Tf ');
define('NONCE_SALT',       'G{Ko#r=boR;USSy {Ec=;zZ>dwj+<L>4Rgs_GUtM6*d<54}m91nk)_N|mSN_( a+');

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

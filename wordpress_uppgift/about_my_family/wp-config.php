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
define('DB_NAME', 'aboutmyfamily_db');

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
define('AUTH_KEY',         'm>(A--EVz{;$+SeMHnt.$u-ZYB3oaK*p.>s``+Y8f.1epVb4$mCT=R~Ok|Z%CLxF');
define('SECURE_AUTH_KEY',  'OPpPcp8GpS[DWG6/|p%DZoSr WkWgxq4d{a.JD-h;_pD55~n;!@dfOOmX?K;N3CZ');
define('LOGGED_IN_KEY',    '+WKy]~HkU84Lz9*[Zi7E(v;^]V@JD{Bw$cv7yR(>]-Ch8iH_&kCr5#sUqv)H1FTI');
define('NONCE_KEY',        's-/h[R-I~,}7))Z05lm;s05EBHF#`~Q13X,xuXrP3C]dB4Iwf_|n|C2{N*7^6r`L');
define('AUTH_SALT',        'OG^1^wA9=*3i^lXVu-CY#cSg*DS6(T%U6m@`QY85sr)Ei-].NxC29&|0>1qxmY5,');
define('SECURE_AUTH_SALT', ')_O5|2EB+FEu6FflWt/$#(c;o^&PUuOr[>Km{h8*bh3xo7iDk*^XJv0hDI?DH^[L');
define('LOGGED_IN_SALT',   'wn%5L9$T@`Ehber)[PZK0JN<7s)#E,/uA!#h}dv_]oLm7;Kg:l ELd8(X@_pka@]');
define('NONCE_SALT',       '|@kuk;{!.=C*1w%F 8YeS2%igCT9f>o-9dFy(+]McE^NznE^sR3k^6;^}t7z-^A<');

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

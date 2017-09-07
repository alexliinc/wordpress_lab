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
define('DB_NAME', 'wordpress_brian');

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
define('AUTH_KEY',         'lUEFxfU8lq]?`yr_gM_<v}$rjZP;t|-nTGeXK+LC%ca?I}; 45uPO8apH&q:<g4+');
define('SECURE_AUTH_KEY',  '*;-SDI %- 3q]j&eFj^v-tc!A;(N5a/^@lms*{^`._j[(l6Nb,ahwTzc~OdZ+,QR');
define('LOGGED_IN_KEY',    '<DZfxX+^C:~>e8ozGt`dlw{YDJ;1%G8[u1-YekQDQ852~gj<r=[.3`>)oiyV4YcI');
define('NONCE_KEY',        'M%0vR<L~/yQR6,wVWKw:K>^g>Ia-)NNBM/+GStUQx Iy.=7ZSfHcqTosYkWOorP`');
define('AUTH_SALT',        ':/_Xgk|b7dO5e8i=<PlDu,/OqoW%,(y/Dr;Epu|6BW.{GswW<<|whGTEpDe-(pAM');
define('SECURE_AUTH_SALT', '`6WiL%U5Ld3$[?rBg3mIk#&yEFUqF>n&t=_h0fMi_I%mqgc3yN8WLZM4Z|6MI/$p');
define('LOGGED_IN_SALT',   ' 9w 7RXu{A[g/)6[i*[sW>g6H6<[U07f/&$h=7w# eVA=)DnIrfNmn&?**(e-d?;');
define('NONCE_SALT',       'UuL5$+U:}`D3<TsAn(gRfon#Xd+y{^-e9FgSEDQ%C,EzrWYAQf4n}B: E2V1K]6d');

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

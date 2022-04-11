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
define('DB_NAME', 'irina-php3');

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
define('AUTH_KEY',         '2S.6^?@.aJ4`/-H-,qzx6{CT+I3}x%0|wo>}:?u_=,9Jpe2GfHTEXzw$@#E~{8J!');
define('SECURE_AUTH_KEY',  '7&Pr;Oi+u8f-vgrd#+,*x@mf=+(Y`qB+-$KvEVqxe$0*tXh$Y#z6hHgCPliQ6&,|');
define('LOGGED_IN_KEY',    'wgwCUd`6f&~2QDnu<heQnut;aAIN?NV0TIa<MlO2,oH[d:yh%rJEC1|O0SNqa1-U');
define('NONCE_KEY',        '1U{Lv(DJf&xK^2b` Co7l]4>D8n2 /b^d7!1>qo>P~3$=BFwZ[x4<WeWuj_4qc7|');
define('AUTH_SALT',        'dmx G.a.:!e8<P>2Zv^:9jzK6dK6l!@ v74`WYa!~7ACer0Q;BL;T86BT7A]FaBG');
define('SECURE_AUTH_SALT', ' ;3qfx9)U=DZ!rqdS/&(sP<Bo+wL+jrQ%T+*W]&oa5!6Oemj0(/|[bra.XG.WHy~');
define('LOGGED_IN_SALT',   '/`3VYrbCt,QUZaS[p)Msv>!V?<}A]hl%Uy)on o0&.=wz}p+ur><>iNB*{x!_YZ_');
define('NONCE_SALT',       'jUJmFPhSuMr<}+a<GAQD7:,r}/qK};<1MP)!B2U)7*o9vM>*S|ilHo,H&*gz?DUQ');

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

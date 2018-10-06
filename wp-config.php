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
define('DB_NAME', 'dalildb');

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
define('AUTH_KEY',         '7w..[N!0z8O=e[(4U=Ufp%%I&coy:-wHS&JrGHbQemaR:fkZYp&#sYS:k?jcJ2K;');
define('SECURE_AUTH_KEY',  '?_TKKV&yt%;?JGF$2_SN@u}<+G{kB)(9q?rx,~;4kTHa^CYw|=a6lThpij{xqEUM');
define('LOGGED_IN_KEY',    'o0!y_&GX;^T#nw%`OYfZ|(/C}g(bb9s5feVlm<.gDB(Exe8>(mprvo(B<~4c`|1~');
define('NONCE_KEY',        '>WU--s<7;Y/Hnbc`C|,E4dJ]AL(vJ<{{fPLW}!BdW4|r;Fx$}!Nz@#&h5)ANtmzA');
define('AUTH_SALT',        'fsI2<xo$k~sq{iDrgL6^z:d$|Y4|58~Q<tbXfe1RJb#jWz2x_`2/==y+p|IDJppm');
define('SECURE_AUTH_SALT', '9+V]9EFAaJ/(y {RCbUx0PC0qLD|*8]H5o:6?|bBMzn9,qIbr0/[#eq#AXAl*VuQ');
define('LOGGED_IN_SALT',   '^W&[Dv?JA,vL9=8%:`?7G){S0r,-~=qV4l:f{drN{HZd=K&D}egZKsW#5Ojjtdtt');
define('NONCE_SALT',       '|s9b8k=`D/V<7_LS,5Z<9n5Uv1*Q|p@N/#Y|*J`>64X,PJ.V{XxMaZX,/rG9a8!<');

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

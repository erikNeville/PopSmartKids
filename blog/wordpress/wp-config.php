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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home1/icoolsho/icoolshow/nsc/smart2/blog/wordpress/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'icoolsho_ss_dbname8e7');

/** MySQL database username */
define('DB_USER', 'icoolsho_ss_d8e7');

/** MySQL database password */
define('DB_PASSWORD', '4RMlvCABPbNR');

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
define('AUTH_KEY',         '0k&3v&f,1{1lP!0PwnV2kv3wu7mTr)ual(M<^X!k J{NUuU5[.?z*uUZtNy$qhvv');
define('SECURE_AUTH_KEY',  'io|mmZaP|<U=bT41+?c%4,N!I^o4H1tJ:hC1t1*imR^XU<j/x7<`@/vr;vIaz]tR');
define('LOGGED_IN_KEY',    'Ad[I=NVFx>Uv<*0motYEG5x9KtZIxkUOI-F!qXoNDZ+|GG>$Ptv8F2rt$.(BIdNA');
define('NONCE_KEY',        '$u).t9?bnO:hDZaLPpK_1T6T#h~N`kTY<0j./.!>z:B4ulDh$1*VbUTHZ:QTp)=/');
define('AUTH_SALT',        'R<mU*Lp0wkBrUr=$T$;q=@,qW+4$O^@>,qyqioFC4g`Xbi+,ub)E|g3T,A_gMI`M');
define('SECURE_AUTH_SALT', 'zES5o!g5o6OOFAj^8^n?JrAv5;dqr$55ALv;NQNIb*8}_6-Ye U@aH1;$|HqUlO(');
define('LOGGED_IN_SALT',   'F777TH^h?}hvWb9-u<m}7yB30sy/@mR84~o~01Ap{xrIAtmJK!b!iK!RHM7Xf^2s');
define('NONCE_SALT',       'y~EB0#R2:+br>?F]}.QLj@*6S;Ks[w)wjqH:dE(m$FfEMj{G%ICTo$%;EX70srOf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_blog_';

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

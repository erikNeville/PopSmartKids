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
define('AUTH_KEY',         'KpED[R,PLk1h_%h0]IwqTaE4:1r1sV=aWo1|U?b;<A)t<cAj&B<e5t?,&Jw(M@X%');
define('SECURE_AUTH_KEY',  'XZkCH0iy$C;G!4EJk4*OnWjKrbq33a=_Go#;`q5ejY&!ZhyRCf*t9nQw]3LkJUBx');
define('LOGGED_IN_KEY',    'iv2mF[JH.O1h0X^)5P^%mY``Jn&S&?0(*v6*eCJv&z=m=$&ZS5Mxk7{|68)nS5*H');
define('NONCE_KEY',        'HTrzWY8]1+&kqp3Y#kqOMabUBgMvti#9p&]BM=={`,[Ur4I?1au7ytyeAO@pP![l');
define('AUTH_SALT',        '2AvJ*I/53~d{c+V^[BszpIXr|cb-UJOo:&]U/nukK4F>Ve*w(2(aM]se;m|R%/cI');
define('SECURE_AUTH_SALT', 'L`a_XY&PUo~1_.}@0gVGk:x|P=hSLK{!f1gn=ZoE-g{vDW8TA$VJ=7Gsoi/Cxp0X');
define('LOGGED_IN_SALT',   'P/[;przD2@kl0 6G+Z9wY#rIdV7(M<H}HL1nng{07UL`y/q L-{C9d~ur]gP.LHI');
define('NONCE_SALT',       'jb1j(C!m@dnP3P}ph Dr%@xQE/4E#7fT9PVp//pBa,f_<={wo6R|dT()^H:lF!j1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_products_';

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

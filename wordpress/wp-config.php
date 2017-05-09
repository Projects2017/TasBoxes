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
define('DB_NAME', 'wordpress_9');

/** MySQL database username */
define('DB_USER', 'wordpress_2');

/** MySQL database password */
define('DB_PASSWORD', '1k2Nb!Z7lX');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'hTOsHysCcTGL*qSRl4p7yRhX#EINZJ@GEaGfIl3JIHh1reOYwWEQTMmt5Avx&4SL');
define('SECURE_AUTH_KEY',  '#WYznM!%JGwG5vJ8^5AOhVa(CNZebAF!pS^AoOU4hRnsCEd)bvVz68nFyLAs@^Ec');
define('LOGGED_IN_KEY',    'h!#OFtW*)Dh5r8fTs@(E9(OC(U9@xmTtYSG8yYXJydN94pOGY8q%H1I%YAb!nrcl');
define('NONCE_KEY',        '3%(&3RcA26tVw)#VnHlM*fJiza28laqpo*JrxWnI42Z9PRy@iUNO5Lle5quIEX%P');
define('AUTH_SALT',        'M!YBlg2ZCQN0lmYK&iAMN2EO%&YV9MBanwsfv62y30BG&bnEmVyBmZqc9B^*H(MQ');
define('SECURE_AUTH_SALT', 'KcH7xB9pa@g@j)ct(z%)XL3g*d8Skmku%T4RFFAo3T2ypu5MCzK^iPLBsZpHK9eO');
define('LOGGED_IN_SALT',   'l8VA0HYRJz!O3z&57r(!1PWeLcFq@B(7Fw(m7@W!!nlYW3t6CXbKq8f!Z0T2oCO@');
define('NONCE_SALT',       '!Wl7EvtG5Ub&K#A!wVi40*5kwR^A^3p*SSPe)IK*sP26RHQ4!poY)Ny*t%V6H8I7');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>
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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '6*G_T1k9%L[#^uJOmMP8*jg{-45t,^-$L9zW26^p(sAdHAc4>eI>Usc<I|YPs$Jr');
define('SECURE_AUTH_KEY',  'w6jNBBd  :Y>IL+aM|&}X.N0w#z$IPikR>p:^ud]=]Uk1R@G6lS{*zY3S~h9-<U{');
define('LOGGED_IN_KEY',    'KA&|MM:q1[&P3~( tnLq$2b g.Gw{~pltNcHxf nd|eI}pm)RoT1IbP!8_27;TU<');
define('NONCE_KEY',        '7bu$B`t+^L^z-}<u5Wf/89vKSu)(v,K94!0oqK]cuf{rchJ{58 B#K(`8)m_N/X:');
define('AUTH_SALT',        'a$X}AkR9L;(bLYzn}CsG.C>#LHhixa k+Meh?41kc~ /.Pn<=ME>ep+zTWh7i.%H');
define('SECURE_AUTH_SALT', 'm ;=!q]->-HUIrt}>iy#(ILcM-J[xR3L,JPm4scT[Sh:egND.K6tvW0z^A89920F');
define('LOGGED_IN_SALT',   '}lkk?I}Yi._;L:;kEg}j`Wl?/BnkWGl[rv>]eK{75L$liJ^=`;VH)KX9CN|4r]0>');
define('NONCE_SALT',       'm<v1qJ5;{.+__q{T4QZlMzxw9*Ms b4lSd[ Hqqk0k7LeTf94S,`:/M^R/oNG8oo');

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

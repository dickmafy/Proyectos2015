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
define('AUTH_KEY',         ']*E@+4|~ge/)9Xbp!T)cZ;QFuZ)}`?*V#7x#-%g#$SbIutnH:>ebpGrHsR7~g(&=');
define('SECURE_AUTH_KEY',  'b39iPlpem~3mRA-;HhfSCPb/Mj$7(|i7o<{)6+lbL{d,$z/cDO=VurB`77$^#yq#');
define('LOGGED_IN_KEY',    '8YsBZW^J[l%Eu&rx+GFK)A*=a7PFU;|4N~=4-r]v>E=LLCJX9mEY#lBg0^c^X&Di');
define('NONCE_KEY',        'IkVlc-;/87VrCZ.Bd-`(X;1~bc0@uL#P/$KTRa4dO83cmR~3rs1D;xP1>$LP !-J');
define('AUTH_SALT',        '0L*m*l)>{Xm3ICCl2K9z$)]|5W6pb&7w;C+{OIZZz|cR:c?1-<|SF]!z<U >g<s%');
define('SECURE_AUTH_SALT', 'k2R]0Kf2A#oxcr^1`J 4Mo<*s45F|q;G<)qYIm|5<3|_RaHA]rUME.X|D2pL P]v');
define('LOGGED_IN_SALT',   '+L<tv|)nk4lKDw |,UEdtF,ze+`s9U;?$@u^Tg!rzYv1Eht2A7+1[sN3q3ZyQMCI');
define('NONCE_SALT',       '$n2o{|;^`z[g5m#5f|`SIX|M#p/bpGU/ny/KSs;^AEm%a>zr)iDDUZ~`EtVMwb4J');

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

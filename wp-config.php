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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L%j^*!q&R9 nU/![O!wj&r,),xd;X+VRh6pzzBVJ)>J/%!n=J/O5?l|oy%E6Lf7w' );
define( 'SECURE_AUTH_KEY',  'poR9oGw|N^JdffwK=]#(k(Wy!MJr}/|od%yaB+:NPECHYu|Izz=fp[Tk_5%ph@Rp' );
define( 'LOGGED_IN_KEY',    '-G3&*@@VC*UekZ>Grz*1jh/UwqOKF)}=(}8Pd.X5ba]bTc}lq:>ht1.w1v60Fc1c' );
define( 'NONCE_KEY',        '@vMXkw5wwA^Q((Y=k+LN3}$%xl$:h1wvzq_s)&Rtt#v$ET.7r`_Ah^?p:lm6sNKe' );
define( 'AUTH_SALT',        'UE__l]_|8RcOqrs,OB9NucigJgp%o}z)#-XpGa {2xWW/IRbZe=QZ2;S-1C{}yeZ' );
define( 'SECURE_AUTH_SALT', 'vIo-|=MDknN=/2<r_btYBV}4}^PcIf^`e_eylt;>3*kBf)KoN15,ZeJW1]#/+Akl' );
define( 'LOGGED_IN_SALT',   '&o3]0B*iFe<UOt{$HNCVd.2$B+$c%6F>>M{F,D[X|MaW 1]c%@EuEE]u2s0A.e~:' );
define( 'NONCE_SALT',       '^el,cpHhDc,-GK#jL9%[_X|s:V<}=),})[;Z.USzXca)rb3|k`a5 HA7hU?5r;~L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

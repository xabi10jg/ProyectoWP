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
define( 'DB_NAME', 'WordPessBD' );

/** MySQL database username */
define( 'DB_USER', 'xabiWP' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'FNuR7pc+&mMUm^SJQq=]HUx6*T.c7H]J)6U GlFLFFOij4Tv(Hp,/a7[uL1Bq/Ju');
define('SECURE_AUTH_KEY',  '>@yhTwGnCZX<F8z.QiWozmbPx~`#Zrab WYN*6>gXOHC-D=[@5OVJEATf-t:^@-Z');
define('LOGGED_IN_KEY',    'pxgq+Tkf+u+yOIF?S=(9h0#-s-jiuo(Rx1D8VLWMUDx-ZQVOax?d#nE5.F3D/|-h');
define('NONCE_KEY',        '4-ahK0n-ZPii%KWhvS,9x;.}va$l_ 0NF&Bat*:`wV!roBpi- WwP-KM.E+Bx7Pm');
define('AUTH_SALT',        '4rk=8=,.%G3@e|sWPh9QDX@,J ,rF]LFbON4Yw6wBrRa|0k%`Ala@<F2|GaCK<rG');
define('SECURE_AUTH_SALT', '|nU@i#.8TgWy3e-+&;h}<XPyU*gqML+w 97wscUG@D]w.<+9a)-<Ak@{d;iQ =};');
define('LOGGED_IN_SALT',   '3GxVTCZ8{OAF!vmp~8i*dVy`5f?gi+&>SaCC_IY@8:GA(6/9Z?_<|=@,{HdoT;%A');
define('NONCE_SALT',       '2z/Gdb(il?bTtUuCD^U}7)6!^}C7!~#FzT$-2O([qj7qoR/wGQe|*GGe<8(2>92`');

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

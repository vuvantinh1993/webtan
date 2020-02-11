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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456a@' );

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
define( 'AUTH_KEY',         'bx/>Z7civcP8jCV5m3A_GgUJily8~o1j&S)g}Tjpob21E;qGGlikx5ovQO@w.I; ' );
define( 'SECURE_AUTH_KEY',  'g>9>dEXPI~mViC}ud88J~~H7z0N41$2|7+_^g3On}gii[f*cwVZ7LJCIdz|N@sJ1' );
define( 'LOGGED_IN_KEY',    'dQ?3)/X!M.YPRB>sD4NZj]9TW}431>ggrIQ{AKJX_CB9ohH?<6<}}Tj-Ydeu#%J!' );
define( 'NONCE_KEY',        'x{jW53co%O70F{k8}=54iQ(M&z.oCHoeb;uEq)nUe)Vz0V;hutD1(/))!Gs6ZM6`' );
define( 'AUTH_SALT',        'ie`@&F&F&C.7c:&oTLj={8m};>$Iol%V8x:bI|j(JHWwS*Vj5VO7N:`+GjC[*Q7S' );
define( 'SECURE_AUTH_SALT', '2tuqu$qTx}C+OQx}gXGR/%d/]vMb8]y{ y;7GYHGl A&!F`u?[ q_gFk`a6f~p/f' );
define( 'LOGGED_IN_SALT',   'mFA5AC!ASL>U>nZWBNF7f2e@Qm_MvmMwYs8z:ZU[1Q?Z`$|@|mtyjesXCN/g3Get' );
define( 'NONCE_SALT',       'UxMkMRfecUW^W&uz%ml)i0gYe`3?iavCsi?jP^@$`IGhShGc1O-X&s*hRUR_?HJf' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

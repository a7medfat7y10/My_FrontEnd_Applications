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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'R5lNk{22(: FEPZSNgRf9dvi}zc%r[>6PhtS=6UQLUIj,30yEj0sU~:GN$IPWA^t' );
define( 'SECURE_AUTH_KEY',  '`FF~5lM# yXnRd:;edOa<9qNSpBvfTt{h%esB`Z<vW7}+3mS15WTN3])jg9G.<ir' );
define( 'LOGGED_IN_KEY',    '~.YMf7#_-C|ArB3ngrQIV .LGpB7_/[,hOPhL(J5$OYScE.<Tb=J{y2CfT6FR.Al' );
define( 'NONCE_KEY',        '1MT7[ww+s`9A=XZ/LSlz/Y&>&Bm5?GGtj#s|+Fz)=3KQ/|9XtkFqp:}K0Q04M4eg' );
define( 'AUTH_SALT',        'aMTQX*y$)9X~qQEgDfX=/Q*wGsw?{S-f!ABVH;i|H4Ym+}2hlGxZ4ZcVeXRQ=>q/' );
define( 'SECURE_AUTH_SALT', 'ft9Rbgha*K[eqBDEz5,CiAvd&lvmKG<|ykKW|2V7+nA:0zi`P1B;a1]vVvs27_@h' );
define( 'LOGGED_IN_SALT',   'X 9Fg D03408f3,:xkUFx%7/<5iO!+Ck-.UXXFohy5/G<z* 4QLq)Q9R4H:@Tdz$' );
define( 'NONCE_SALT',       'W)|X^urLp)]2[C!Pj=<qis@@dg;V|X}>BFA0kbxJ_S){#~tBt!3C&p@Q!qj|a?zA' );

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

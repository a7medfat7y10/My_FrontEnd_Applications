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
define( 'DB_NAME', 'wordpress_elearning' );

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
define( 'AUTH_KEY',         'Q(+]WB*%<M|^T%,S)oU?-7-U 2z$udfD5uP?w5&DJs$2#;L.M7xL=s^h>F3FOQ%m' );
define( 'SECURE_AUTH_KEY',  'C]L4f<<G=adz7s?RYY&`-d:/XAh%_AakSflSY@GIh<aK?3&gh1*V&+36jiYFip,x' );
define( 'LOGGED_IN_KEY',    '+sjDL5/ZMwH):QOVY`rL62:)}cGt|rf|$bs=?.xuxr7!E=29%{Wu<t`1n+|[dw# ' );
define( 'NONCE_KEY',        '+: @T.PWLf6+lYwH13S&t,g[ikTQY[!L|r#(D,&hUj1Pca fnMYQGy<)N7sATXiV' );
define( 'AUTH_SALT',        '|9#0W_V8[k.>[9Fk}2[WlK_jgXO09VRdZm<{{1M-.C<j $sZ9qJ]~TPfSys-of_%' );
define( 'SECURE_AUTH_SALT', 'qz_h-&jik-_?OmTC1AIvu!-xDuAK=;1&v[E)#$UF?jX~f?eiI2Qh -dMXeE%Q)ez' );
define( 'LOGGED_IN_SALT',   'q~gB:AIZ:4LeNmXJAc$Q_)1Dqh5iPO<OKx:zWzp%8#NNT)k!KlPdg;@aTAZ,kWs+' );
define( 'NONCE_SALT',       'qNGk$/@VS#SkYJKcuIkW-F8zGfk9NA66FoB~gy&eC-0f@p`!28J1?xt7JzWllx{Z' );

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

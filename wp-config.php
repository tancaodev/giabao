<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'giabao' );

/** Database username */
define( 'DB_USER', 'tancao' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Xe!8W,]lic=lS2a?@3zCFjR,C%Hz9EQa*g!b~s]}r;<GE0%%c3.x2L[v SX=A+W2' );
define( 'SECURE_AUTH_KEY',  '6]kY 1f(I*AwqBDv?g7FUhUV@KeJDlv o/69btslt.Y@|y#G{z PR(AL8 :/}k%<' );
define( 'LOGGED_IN_KEY',    '@m/a!FQd_[7W4N3<d_$#mE^*uDx>N+lt~>bgnE 068{HsC`&Upi:P#4PD@9N$$0I' );
define( 'NONCE_KEY',        ' J5]&vx.FO%V1ca-iqn(m/8q[_yUR=K-+[[WO?{o34`Zh$>$QGGZ9#+NZWOXomag' );
define( 'AUTH_SALT',        '?Q/zJ4hlTW;$XohDVqqT@{gUu(Akh8RiJS]6{1^aixs5olK.CXQp5;@=iJq0vx6C' );
define( 'SECURE_AUTH_SALT', '=t&8 VM{&_2l</3S9PyI=#a11BJ|#^v_b+^]VtV$5D5cxL.|r/D|Ax]ln_Xu#i>U' );
define( 'LOGGED_IN_SALT',   'e3/o}Z7d7mNIdIo4XUn/ /g[|m (|PDF#:^i1lqdeq#l}zS/B2X#PEJi+#pvB~/%' );
define( 'NONCE_SALT',       '%]JaOTl/&i8++FsqAx(MhS=VC~2fu3Qk(*AsbGaz~l.)r%He?-J5aN1,Y{$FYd({' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

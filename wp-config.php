<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_website2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(LhtLu,dB^_XG4UFt! JjTGa@(QWa0@Eug p1enG6B<FwPL?.T%*%RYz&w,#8Xg:' );
define( 'SECURE_AUTH_KEY',  '0un^t^P|~(:/Od:09Ao%J9r+Xh`[b&{^Fpm=0gPa;hh3/W *j39^#9PLT#jTk{DX' );
define( 'LOGGED_IN_KEY',    'LRHV.M0]}]K|7WyJ<z7X~Y._,03)El+fjy3sb3@=pNTgYg o/KE13r$8cP+UIQi?' );
define( 'NONCE_KEY',        '%5W_M:r|lvXM! %M4}Vcn_#**n$u1PB.llG @- [U,/;WW`<.+:r&Ua X~{e)YV6' );
define( 'AUTH_SALT',        '+],O~y$Q?4$X_=%{3BjhTf{8Yt[d>>KrAgF}f.[I5.B{B@qRx9mBt=FZ)**IHN<`' );
define( 'SECURE_AUTH_SALT', 'Pva<q)i1e90Anav1@C#AgCVk!WqPH6>6=7 N=I(7zxb|Ow&OWqZF:`bbm3}/0)`}' );
define( 'LOGGED_IN_SALT',   'Gk7?m6<a*nE[Yp`sONP!T)Ix)8om];JN9>H,Mw!MeJA%65=5@4]oKW]CQ!H]QUZ$' );
define( 'NONCE_SALT',       's9`gh4i8Z)?I f$(?I:nIiT[Q+Up4[cE_cdD2U X3#IyBE!Oj0pmp)=$T9Y3o@j_' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

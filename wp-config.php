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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'I@*MVh_*<a*m3{U6WKZBMJ+dnj8>@r081*VC16$^BC4QvyC79[^/wBY}4JZ[S:jd' );
define( 'SECURE_AUTH_KEY',  'd-s$z8:A^,ZHxVa12SF6H11QXzAv+|FKaku6e6R@v;/NY<=`L`vXLaOEDK<4{GDu' );
define( 'LOGGED_IN_KEY',    '3^v5k2[Ga(LL(<dppuDWDt7A:QX(rwy.%O|R :jG5@e-S-#u$wO@b(.0*<v]Z~a`' );
define( 'NONCE_KEY',        '3nT,w4U36s`;qI+dBsX}M,u6?m=g[F/f2=ViKL6!Vo~[=w_fIkh~2rCi8 !2;O&|' );
define( 'AUTH_SALT',        '*O(^)9kW`cV8VeHP}m(D-3HY-6O TrbA3#<2w@cK?~z)[i{gjhNP|ZK(M1NGj_<o' );
define( 'SECURE_AUTH_SALT', 'q_9gqhm1NW%1Az)j+I<7tGO,R7~O-oKN$2@E67$.V55k6tRicuXA-|+!tg}#1mSr' );
define( 'LOGGED_IN_SALT',   '+VqomzOBiTJ~%i(q@BY2^j-xJXEZggQWN,ar21k2n;t9?Q%}PNV>/5lgE4:n7)bd' );
define( 'NONCE_SALT',       'Ev&!t|ulVy_v`S7cGclk:V w^.sLd_5Ge~B@R^Z,$(L:X)XTim}n21XhylckBuAM' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

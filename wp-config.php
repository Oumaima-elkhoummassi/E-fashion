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
define( 'AUTH_KEY',         'DQn-.vYq+})4DJkjI0-/?dzq@9s6,Up>1#[.@4~i}[9Z#8LY[n6 TqHXv2w)aD:]' );
define( 'SECURE_AUTH_KEY',  'gP#d7po!B/SJ[ee?{I!pK-t`p<R{,rTeZth[I@M6^2ptX?LG!2A S20sgEn*ql x' );
define( 'LOGGED_IN_KEY',    'c,>bH([VT3,*Q#KWfF^hHj!hzA=<B4kc)lTyi4gk[%N3{l*?KkRnNpt]>*mF]CrC' );
define( 'NONCE_KEY',        'f`.?cBu5L8Fy@~[KR(!n+wUA]}Z.MMm<._OY#vI!jQKM_X$:0z Y_GI+P*NzFp]6' );
define( 'AUTH_SALT',        ';JAzuX4j~t+rc99](TFO#OdrInW2++|FO|sOxm88pXrc6 :/4<Nz1<Khzs(T<ID;' );
define( 'SECURE_AUTH_SALT', 'p[#Q=PgkIQ#WxG0`Jw~aCXZRs+d$*--GQjwQ{fHo~NN;Q5V)K@uheS1~%0+p!#uu' );
define( 'LOGGED_IN_SALT',   '.r_:DkrU-n3ztX.BWB5CV,|>mC,]$mY0`wNj3D3*id/%u$eNBvO9O_NFWRgVc1Vi' );
define( 'NONCE_SALT',       '}]xB^.v8S^rY]j7N^mAQfLla#2Ys1`}qF~!p;P#N:opx0n0 R3#,xg7MF,%$h(l{' );

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

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
define( 'DB_NAME', 'lanube-2022' );

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
define( 'AUTH_KEY',         'W&b#}j2MW<zCfJ/bN$1>Hc<G;a3E+:(b>yzLrrk~Kv-8ePrU>Y+_%XMJq|`yfLqT' );
define( 'SECURE_AUTH_KEY',  ':y./nP0kPFEBP#p&n-]:8f>?p#YP!GfB N-aT{YbswJ&[S0Z66]6B~3xuG|[Nv6_' );
define( 'LOGGED_IN_KEY',    'Lj#L.V*.}k7>-8Bwgjy/ynU ig<ygFy)f~;nViH!GJ5U^;=;@{ YmxBrb;($Yhl?' );
define( 'NONCE_KEY',        'q?s*NuEW.&B5bU$s#xcyqH!zTAB<PVNGu_At6;18uG?^z(2N8Lwgw}$pR,0k[$~K' );
define( 'AUTH_SALT',        ' #cH/9&84pnQ1Bqo:f7<Ll&Z<||E*kkXq}6qXz.$ZeLS/!vRxEoJvE)fe!}b1^o+' );
define( 'SECURE_AUTH_SALT', ' Pa!E%Kv2>06duj]1D/s]P%h5|%|B&uF%=fTYp:Pb&/%Za?r[M&:wU(jF.WvA;HB' );
define( 'LOGGED_IN_SALT',   '8/D.+@Z[JK`@znNUu9/*CE2QpIQZ(P~>hotB_d_rxXv+OL[<G1pI)uRZzA$g0QW9' );
define( 'NONCE_SALT',       'L/v0Qf=N$*gbL9,1Ix)`7CfQYpD.;xqY&[X#]F5nis?%^O=6&KrfqbIMSx1Fw|OC' );

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

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
define( 'DB_NAME', '' );

/** Database username */
define( 'DB_USER', '' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ']m:9J1a, ik!ln]@|=Kl|@(3;MrEd;J*TKV1-@^N|Jh`cS+NB#@|pu^N+s&!+6F2' );
define( 'SECURE_AUTH_KEY',  'hna$ |nhQHl<!9Bc+i9)XR&GHGQc)0i2&$sdcjPDc<GmP|-elxvs{UP*,j7y1{ K' );
define( 'LOGGED_IN_KEY',    '`iFeg/_dqnuT=d0kDhLJ&Ap;#w%1LjZx7I(;S( _Xc=?5tvt{i_2mVm#%HIgUbrf' );
define( 'NONCE_KEY',        'e7O6`{vsH. |]wIf,tEApgc8wtMnQYjeP$x[e-5&g)yu=Fmg7.PW3)AoA*4jR,rS' );
define( 'AUTH_SALT',        'S}t$FZtHOS4|U&)=@nuRwu}b-;[1L8}=~V)W:!m]f,<FF_a#}r48M_n(eIB(=}=}' );
define( 'SECURE_AUTH_SALT', '=v`~pr8H+}vUgv5}*<A(;.x*T^]F7/[7a&!svr:XnLV/~f}d)nc` :1_ICvU<uyv' );
define( 'LOGGED_IN_SALT',   'Lbj^ORz&T&MGAXFS=@m^|g+_:@w4jEc_cRXIl1]<)-aC0 Mn#l8_?+ZKw{-`|`Em' );
define( 'NONCE_SALT',       '71R*k-W6[&|p]%9[F)ea&Mwp.BKiXX=Econ(V6AQwR]]ClPD,/>[1fOD8Mj-G;q3' );
define('WP_HOME','http://lb-wp-2114640141.ap-south-1.elb.amazonaws.com/');
define('WP_SITEURL','http://lb-wp-2114640141.ap-south-1.elb.amazonaws.com/');

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

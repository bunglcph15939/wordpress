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
define( 'AUTH_KEY',         '0Of?VDEW]3;@E$6>,Wu&fW}M4D+y5MrA3M^ 5pzGha)9S#T.d>]5&+Dkg?=;^][_' );
define( 'SECURE_AUTH_KEY',  'A=.0}_sWxw9V?OSaFwX=JpJL-)V?v98u&4UtYj[P%YkM&1X/>ik)X/meS-z.R+w:' );
define( 'LOGGED_IN_KEY',    '>^N2y^e:Ia;Byb,>@?L9e)KeTlQ)zaYLnl|~<`$@$o.AITRI;Qlj-A~2nvG7zhQ/' );
define( 'NONCE_KEY',        '*~-t0Vg[Y]}Uk4roUxHO?e3n(HJJ|}oyCh{7&P^+~mZjP$_Lr_wc-eq~.l{|Y3{[' );
define( 'AUTH_SALT',        '`>58@%w~raY%PDg1Hz8alMO$`-*}P+oV1odQ?9D?{a&lE/]^J VI&$N1mYd]RA|0' );
define( 'SECURE_AUTH_SALT', 'p1R;hrm/+%G2H)zGo/R=-7y!z,#&,UAJpGKJhJuv>X% zJ*76%yFO}w7K*&h4zr(' );
define( 'LOGGED_IN_SALT',   '0SDNE%H6w}U$fIrLHG]g`yz_lhEo:l/<%6#M,pZ:Y|(=Z%y)s#B*?J,m0sfCYVoy' );
define( 'NONCE_SALT',       'hc;z-/u%/*6F:49JqSeXCgVi(fH:RxxVSH}z*m5>e6%&=_<~2b{GqxNedI=_Gtv:' );

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

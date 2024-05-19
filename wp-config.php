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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_blogf1' );

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
define( 'AUTH_KEY',         'J{2Te0GBku<i!9mA1(l:HT/!s~pf?ee#D? QK?teTT<v~0PW[z+/<,j=(^sQ&u~W' );
define( 'SECURE_AUTH_KEY',  'CNX{CGEa)gR+j_p<3pkCn#8n&fuUUqp/udS:Kgh2YUMI`Wcxs+u#Z:]I<ugbjSL,' );
define( 'LOGGED_IN_KEY',    'QX#&geJ?l,t~>K[6:XfrULs+0h=|l9S]fe;qY A]kUYr0t4OaNy:GOP+;p]`S`Up' );
define( 'NONCE_KEY',        '8=;=`}]oBK6i?yPYJ8&|ESr-f&>}_]d<v{02C1R)F{*~ofI<_498{U58<t0zl|)_' );
define( 'AUTH_SALT',        '|)h4dnLNR6w})||7<Ov9]G^a| ~XtAxW1pWmFzUlSS!s)<(5ZL6-3B?!<Abh3DtD' );
define( 'SECURE_AUTH_SALT', 'rmZ/CNzAc7/h_~;V~W|IAe7vPmR84VAm+-/sj&zs^K/LWR[pE.xDpj` Em$4>%V,' );
define( 'LOGGED_IN_SALT',   'D0d*@e)(RYU%7,l69T%EP t`[d kzx1!DV^miitd=K=8GgOF<zqR!.b~;%7(>lR}' );
define( 'NONCE_SALT',       'blzS;rJ(wZ{]3Pr[0P?L~kJ-HmdN}#oG)fZK)m] ~O:<hK~R1v`-G(VVcL4]Eb,]' );

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

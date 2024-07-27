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
define( 'DB_NAME', 'dental-clinic' );

/** Database username */
define( 'DB_USER', 'dental_admin' );

/** Database password */
define( 'DB_PASSWORD', 'P98r3)qiG40d5V[A' );

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
define( 'AUTH_KEY',         ':m{7JuDVvzwh43cX,$aqbW]e q<OQ$D`4rL8t3T}8YJXYYBM=7zdQ3%QoI<2C,IQ' );
define( 'SECURE_AUTH_KEY',  '7`gs3#:k^bF%0!fmh)#WcD@I*lZl)XV>$cbJqyrq/V>y{CR8o6J1/Kwu:3]p,Z%e' );
define( 'LOGGED_IN_KEY',    '0sFKekHcP.Aq&GOCK0O73K F[5;otZ~^.:;UdX&fjr[gY5aMO]>/~8@]L #A5VWQ' );
define( 'NONCE_KEY',        'pEdlD/0:9o#P/$F3bp,LpwUGS?Lk[C+LyZtG|-R|;^7:scLU0uM:r[r>HIK%{WGV' );
define( 'AUTH_SALT',        '{&+cjILLfRK4,gc=[fz^JWx-LD9MQCTQEKim;%D`gX4HK`,j[Ou-Y1gs:}>h2nX+' );
define( 'SECURE_AUTH_SALT', ']O!_UU/=[9<u$nD}}CzJ(gdOt]x;/i9?qpH6LN{N0:g/B!|%)-cU/fmLXF}p9^Nv' );
define( 'LOGGED_IN_SALT',   '|2za!RLuv,S|3voj{&$CE(~r_s2H# b(:c-EZ8~C<YqwBZhfC$sd?-u&|q)kL0N+' );
define( 'NONCE_SALT',       ')&D;XC/m&6Ak^,gK?J),M-,&}f,dyzH/[&mqhzwg R^[k{///E]c=&kG!tC)sA66' );

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

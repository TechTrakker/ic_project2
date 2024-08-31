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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'tP]}y[b@qghQlHmDta_-3ix,[w{]rx<|!=[kd6)6;t^2I?NC6cNWZD?Eu~f5/Y.-' );
define( 'SECURE_AUTH_KEY',   'Uy]VLt=(?E5DybA+c%*vDg64dRV,VtA;6MOkWq_C:B`[gv,bmVPmuxfNrY@+xcZ3' );
define( 'LOGGED_IN_KEY',     'gK9~v?)E<ycC{IeGp$u/xw V5J(D1]uaP}?2b6NbEyqu)D.7IRLC:+GL$+ID/+p+' );
define( 'NONCE_KEY',         '{s7_^#+-5TQ}{<qp3et@m[u)J^/27!HiT_c%p8{P@zf.8zn-I6|S3No?x{K/&sM%' );
define( 'AUTH_SALT',         '?kJ^- }6gK*dB>CxLa4a4e|z7T;dGlfF7eN_&F:uYu>R7F!9Sj5l!D8uMYp`K{51' );
define( 'SECURE_AUTH_SALT',  '?4-K B$e} Q]X-A~sFC,Te+K;(JIviM#!K/H_ >eqv <pQhY:YyW#>y_YR;JSuh{' );
define( 'LOGGED_IN_SALT',    ':y`@%}lUS^mLj>ebnN@(C7?$Rc:Im`8L_ 2`QB9pt 55I<~NZiAH:{/HTl{<uQ/u' );
define( 'NONCE_SALT',        '`5Xmpklfb0vdso1|{e?w__i8j%LYVB7lANo=4db9/Zz9b=&uTbY4N:30uD #C,R:' );
define( 'WP_CACHE_KEY_SALT', ';HhRw2YE;qeHq-n$R}DXdM`Uw.N7Tx?i41hOT6w]wN|iJU+$%p0!28q,~9Mie=|3' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

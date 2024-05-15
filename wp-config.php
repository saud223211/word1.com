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
define( 'DB_NAME', 'word1' );

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
define( 'AUTH_KEY',         'CS53z9#880!,CBi:(mzOK{Vk%D-1mT!2}26 US7CZ7/|1Lrtdh/SvS QRGI+frDS' );
define( 'SECURE_AUTH_KEY',  '8DEcyUO#mu8-&%)gPSe=K(P=j6^Zh4[k@_O$ne[UhupZiM)ywMD6yvgqT6Y*M}i[' );
define( 'LOGGED_IN_KEY',    '{y&*HYf@[_65,2T+{S<HwhV(yy44q72+A-PW[C>PxBL+~EPG-_=(d]a0*p]/4I?R' );
define( 'NONCE_KEY',        'z^Md=a_W%P9f`qe17<Y(+*)QseSCsxZUukO`OB5;b!~]V/%Q`4._?ai2(<iCPH|p' );
define( 'AUTH_SALT',        'bU:)*7:LH-%vv# Pn[05H>*|EsMm>PCz}hqd4XUC+_;VEel1]{I$m=:i4CPY!+*Q' );
define( 'SECURE_AUTH_SALT', 's]=DT>y:_^Ollk_tR/fQ9Zl 7:+bp<UmUBkfYrZ[hAi:Ns2.t{dKhfp+8:>OXOj7' );
define( 'LOGGED_IN_SALT',   'JfJ<YI{7~:sDX0RH*zO0G5t@8e;T,Dv{ZCmaDdtB`p|Z2 ]Pl?pR9Fh620jJ8;fp' );
define( 'NONCE_SALT',       '}UDVhS{[`SHv9bn3[IpmH(9RhNI[_5cW%~wRoWEp-p@JL;.kv5zuFOlUIu5+9Ic}' );

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

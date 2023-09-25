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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         'WHhAsPDWgMMpJKsj0v^-9O~]f*#au^t~;B~1R]%h2d(ibaj}|nl*Zo5jo={73p:`' );
define( 'SECURE_AUTH_KEY',  'Gpj/4xb$TeZ=oM,-y~!J0w6cM~0D==w1pdg*w(-.|C-Rm$TlH!(i3`)?:z&~Dqs`' );
define( 'LOGGED_IN_KEY',    '*OQ#-7<W)1aXJwaa]b&9%a5SQoS]}^>T_s_q5,J pt)_)S1)jgG:A)ko(<A!2}bY' );
define( 'NONCE_KEY',        '22T2]rUJpEn%rq*6nXm^lcxP3Yc68vr4UY tAXv`:9EMOb]lbL(99MRG I!<pvX)' );
define( 'AUTH_SALT',        'T7^b|R!9:L$ yD}xDv1:UJ2x[WBc{R:2^J1_x`[|xwM$HR$yA^ja.un)+Ux3C t@' );
define( 'SECURE_AUTH_SALT', ']uSuq`J,*b+K|nUb)lw@RXQ,6w D-v;}]ly=w)y>$CsX}p>h?V!<~S+yFTyeMy<X' );
define( 'LOGGED_IN_SALT',   'u8kJw,eSeK5,(]J?;oXX}8ls8<S:mwc4;ST$Lrtd.g,_ &V/$D5HuF0`[(2|IOCp' );
define( 'NONCE_SALT',       '&Nx5Nb[o#Qk~[v/iVQF_m6|+ ~I]f~aVm%6tjdT-6Es9rq$ar3Xuc^q4K[d2jh6z' );

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

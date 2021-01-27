<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lazienda1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@ZEtqY2x<>IO-Ear_6y.>wBsnt<#q`F#-RB3rS3|8.H.2FVZ<*IF$P-~h^+bwG5/' );
define( 'SECURE_AUTH_KEY',  'L]m=xBd[rm~*C6S^j;r,ES&J`b61g0/$!K@.`aSpo-y^Y&ay*Y5b9Z=w&D=i(<()' );
define( 'LOGGED_IN_KEY',    'Ytr;~yDQ~yfk|B?CdlN,?.y=&wDe`5Oj${4zA^M.Jg{-)IBCz1XUj4%PEXIMPXzF' );
define( 'NONCE_KEY',        '/}F.{YgjMQ}Z$ES>k;c2ZAF!%FQ%ujg&N`b_|P)rddAqT`pgJQNQT<68e(ilX2S`' );
define( 'AUTH_SALT',        'VDh3q~#MTB,U+Cb?<0K>=Rz3*LVGyES:]@BZnOQ+u$)>0c|Yb^(|Ql]N^q_+C^69' );
define( 'SECURE_AUTH_SALT', 'Z0TtQi$T~ib>&<&2XEtDmC;xD&a R9|L*MuNTz1zotc.Nc_=4,zGc5K$sJ=0`GeE' );
define( 'LOGGED_IN_SALT',   '`j3fh3y>myuQDxa-_^CV$;-;C6Cfa*:M<TomFO<EZ#rDTU0iQGjH)pDm)+{fQyl,' );
define( 'NONCE_SALT',       '<w5K${(z].0RGu,!4RK&g<D^cJEj4|h=%D.^&|h#Z=)cJKGnVk`-)2up2y9Io97m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

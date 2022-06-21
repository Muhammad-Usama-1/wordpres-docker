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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '[nBBI$MV@[{~9d}.[Sy`P)]<L:=/tk~7#:8GzaX-COg?x>CeVk.5(U[qKK4D%-`t' );
define( 'SECURE_AUTH_KEY',  '5j)=O4B#sq7H>zo*)Q533S<([HR@!5m_oI7ApB7C+;JEX[GSw>IezaO27|K;1nk1' );
define( 'LOGGED_IN_KEY',    '-,T<9mC[%[OY! ?bn=4uFi3*,wmf+/!@CS5DKFhLUmeBp#qtL2PI:}AKaU}x{*;p' );
define( 'NONCE_KEY',        'B[T;6b Xn):^&KzMF(&RHsO+G{3F#%is5nP!O+=7BV}LNWUnc({,Zo]frpT~%Tk^' );
define( 'AUTH_SALT',        'QdT!=w>`]:cb4^V>STRc8/RzG$Ke}?{8MG.I)nVW66OS0-lS%9$<W`UK5X;nc@Zu' );
define( 'SECURE_AUTH_SALT', 'Z7R-amcWQJ3}4|0%.qrml=Oxxw1dOglOQ.S|48Lf9b[g>F;]lud]ta4AAku:k Ix' );
define( 'LOGGED_IN_SALT',   'd96In%gP^X1 1RngPH%OwITF[)lI(Hv:H]^(X/9ecY%(ZHMauungh(JR-#hz|)7/' );
define( 'NONCE_SALT',       '^:;^rXR`[WILmh>_]`B37IQ6>:%0nV rTdcuTUz-Rj3~3`sWKY@G%`FKj2H>}0qT' );

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

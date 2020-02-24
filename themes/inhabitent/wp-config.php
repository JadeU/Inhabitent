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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'inhabitent_database' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'I9B^:nH74m1s?X2e#^{27=m^u2IsPrkm*E%mF`xh7E5>iV<R^o[]lA9:1Ds6P}1F' );
define( 'SECURE_AUTH_KEY',  'N2AFonc]DI<3|k{+n@eF.576}mY+,Mc_H>)sp<u]g*gd=ybE!xdP?+)<7Qkz:V z' );
define( 'LOGGED_IN_KEY',    '6^H1jsAIUJ;?:YL=uoY|Pa7@gD1TN-,3BO93;~Wz0E[QwRYc_O0}q&/8J?3{y]ew' );
define( 'NONCE_KEY',        'eqQ,/ 4`7 j&W*~?A+]TCWSN?=NB8O>r:`Bn:raF1)?,4$_{?+~45x#^@alGW*f`' );
define( 'AUTH_SALT',        'XS@^NgMEr XUT_|V@uCr& ^5NS49!2@)+3&k,roUW~e)@h8KH43[bHu?OHl(xR!j' );
define( 'SECURE_AUTH_SALT', 'U7EnEDfp kmLx]7V|dY;6KNQD-jsl|C]yAUhw?3*36!dYFz[ISEP&@GY<x9@&<r!' );
define( 'LOGGED_IN_SALT',   '5{K=MAi 5;)LoCu|1j}AcC@[Dt!T0ie5|R;q^5ZELjjo8^em2gr kbJh1vWk;,gp' );
define( 'NONCE_SALT',       '|s}:oRlfX3HQd3Uuc<hTi$q4$=Y!>>Uw}3b9(R^`wX~5SyOD&4kb,`3`e[nuuH[l' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

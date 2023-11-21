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
define( 'DB_NAME', 'dummy' );

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
define( 'AUTH_KEY',         'RxH)/<sHx8Jq|*2H$0_G8>01*~.]yZ0T/{Jp/$9|;imn3z~^+<O}qHrK;*qM8;GL' );
define( 'SECURE_AUTH_KEY',  'f{8h|2gSm8{d,_:eFMX>4Z&bH|};kD<c*!zEZOF%R._6/|fqyS9tEYFvw2DAO`},' );
define( 'LOGGED_IN_KEY',    'u`Q<)&%@YwMT$?*I)]RN[p/]`V+yGP2/x)+u<*:W3n(|)#{Tm4qrSV@}:6od|I(M' );
define( 'NONCE_KEY',        ' JhM&1$K#C<x-:;umuu,+:e4xw&W_Jc}JDZpQ7Hd_zgF:EPF.9z_g#x)-jl8-d-/' );
define( 'AUTH_SALT',        'i]&@DY1(UOb1f}#A!-;+5x}h#JfAx6LVES,n4XR64T1ff]/zKYMpBA69|kkHcVf6' );
define( 'SECURE_AUTH_SALT', '<ZKg%]SS,BQ?{?T8O91oGyi5?5j.O `9zmZuf^`-|[J Q6^[c%[VW:o8B{)C-r3B' );
define( 'LOGGED_IN_SALT',   ';Y9Xx6Z$~~K=4p`p1zR^p_|lT{RHC7MYrl!y~iop|dd/NcNVPKl^@xnD~|3!tpf#' );
define( 'NONCE_SALT',       'G6wv#AqA*CDa7t}EN-#VvR5{zHa}3|++X`K5B3gFL=#10OCWOt|zO!-vXxM6t8RO' );

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

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);



/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'news' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'O8X3Bpz6TpEGoXojepFbONAFWjmDXSfdywC9NEqvZoeKWK6avaKdoMDqPj8DnAPa' );
define( 'SECURE_AUTH_KEY',  'Qpxy0Dsu0r55iZe8KwTaWzB2YweOZNnsQJJdI1tGsZeqXBjbxggqsoQrWk5lao2N' );
define( 'LOGGED_IN_KEY',    'iMXMxd07rDpJj5SG0i0vqC3X1h5yS5wCHcb2vs5HTaRPsGM3G4767uE7DzSQBbf8' );
define( 'NONCE_KEY',        'vvEsIC73jACDboEgXOZTKFK4IWEG9Jj1fM1G0n7KitkEDDdVk4LWsGXUnlI2ycop' );
define( 'AUTH_SALT',        'OInl7YABlvZjmo8I8yunvleIU1AxKZ7y3PqTY9J0HRmc4TiaMBmexXlNRppyynHB' );
define( 'SECURE_AUTH_SALT', 'bAMniCLAuKac6O4qa77ByLT6sm5xhEeyEQg0ALJN8XqSjG8F8QgtsY6nOlmGW1M3' );
define( 'LOGGED_IN_SALT',   'Ev9RqUrWuW5VLUbYZU5LJL0qPuSPFqIVJQds3guGDzIyaeClgPRkhFWnnqYslVns' );
define( 'NONCE_SALT',       'LPFPWMPICWeaCAcCieFHZ8MJHt6gzrdxt3sBNuj6bGXeKQvy7D5afYfN6zCQa365' );

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

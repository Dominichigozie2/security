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
define( 'DB_NAME', 'security' );

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
define( 'AUTH_KEY',         'HOTqmLqu31AspKVBbUH9uWQpqreG195M0uDOgBzluorrQdjrFeJAhr2yHYVKw0bU' );
define( 'SECURE_AUTH_KEY',  'tX9uOGBkZvtJ3CBKE0yf7tRhd63W7nbp7NsqIk1yX5U43Ag7mbyGwhNqrxoh1tgC' );
define( 'LOGGED_IN_KEY',    'PjVD5cPrfsffEFfNg7dyNEe3PWIFkYCDGNCk3QVco6CeO1PcR5WAUpDH1uPxzpia' );
define( 'NONCE_KEY',        '6bHA8MvVmsQZX3bXwPdK5dPdXp3FaY4F2kbGaxgtO3LIl9LWyqn5yroUQ9or6acP' );
define( 'AUTH_SALT',        'LQUrnL090Yyuhh0dERoKe96wfDwbVBa9JbnJqs7khDGBhd7frPfJ4b8JRp1Bvk7F' );
define( 'SECURE_AUTH_SALT', 'lF4vCdeQPTne1FWGapqAGalkg1GFVicKWqXSEbWlv9c2UYipBC4vFwqwqjotQW82' );
define( 'LOGGED_IN_SALT',   'SWwDv5zxJS0MgqiY7T8OTfo6Qijb9Lq2Q3A6yDNLqt0fiHdJ1vGF9cZhWrmyOBgs' );
define( 'NONCE_SALT',       'AwW5F82q14nZETsNwmgQAYT3YoxllzVCor3HwBct4iVhkuuOP8HcUwt8UOf5RKh8' );

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

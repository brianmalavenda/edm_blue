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
define('DB_NAME', 'hnectpmy_WPOFQ');

/** Database username */
define('DB_USER', 'hnectpmy_WPOFQ');

/** Database password */
define('DB_PASSWORD', 'MoX%!yI:EyX6[YXeu');

/** Database hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '4201d621e5302165cfa1cd9c20c033b8dfd7930087fac80958d733cd6bb2adc5');
define('SECURE_AUTH_KEY', 'f23408d047a98f7511f351dd78804af08b9daab3016a72a534a2a33dc51035a0');
define('LOGGED_IN_KEY', '2095361bc8a57c8c20bd8ff0898746970f3ffaef672b27690ad93a4cfb41de5a');
define('NONCE_KEY', 'a93f570659d12331713f5cd105a7509e04a191d5616f203475edc24df5147125');
define('AUTH_SALT', 'cfee45119e73102c1e26108718b5e60e879042824d965b2e4fd82af6217da371');
define('SECURE_AUTH_SALT', '9252dbb5233795aea436606a6d8c965384007fea7c083ef82e2fcf14a8cca625');
define('LOGGED_IN_SALT', 'a9416ab30144be51b4ebc0caf0d08f3d9c973e1ef349e59b7f76ecc56de1e899');
define('NONCE_SALT', 'e18158a02e5875eda84517f1339c89a12fdd2fb5573df8f4b8274c8c682e9eea');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'ejA_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

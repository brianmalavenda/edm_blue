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
define('DB_NAME', 'hnectpmy_WPCSG');

/** Database username */
define('DB_USER', 'hnectpmy_WPCSG');

/** Database password */
define('DB_PASSWORD', 'oqHtnC$joI[}!Mssz');

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
define('AUTH_KEY', '4deb7457d2dcce7c3d9583bc20576648a996f729065c051fd4a51a4f89e8677e');
define('SECURE_AUTH_KEY', '7c6e7e0e7d9288d9b079df212a8ebcbc02ead6f1a7df68e1334e914c9f71c4ea');
define('LOGGED_IN_KEY', '135838e33aba176f38c53f9488b2835f9c674c440b0ad977738b86d0b1f62d6c');
define('NONCE_KEY', '7fee820cb31dccbfa70a53bf13d686cc3db184d8edc7470e28a75336fbf92440');
define('AUTH_SALT', '30f9f44016739e0a256a0957695a1a6e241251fbb4dc15ed84577210cf73527f');
define('SECURE_AUTH_SALT', 'f9171eb376a530522ee6ba9595707dfc7dc807b76ea8ddcf57a8d3c8f76143cc');
define('LOGGED_IN_SALT', '33b0d5882f7ce4f6d7cdb368062496c0463161cecb1431715e202b91057c141d');
define('NONCE_SALT', '9a8cc908ad8d6f8b2935f93ba10de3fc34059225a39ec44dd30e86b259d12081');

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
$table_prefix = 'JN8_';
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

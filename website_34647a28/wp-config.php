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
define('DB_NAME', 'hnectpmy_WPWXK');

/** Database username */
define('DB_USER', 'hnectpmy_WPWXK');

/** Database password */
define('DB_PASSWORD', 'f=gzuD$vkv8nBCH}W');

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
define('AUTH_KEY', 'ffc93f16419830671abe78d70820fc458043080908f609f32971b23cba188f05');
define('SECURE_AUTH_KEY', '6ac419dcf74ea9081c1676df4ccd0d93c60053f00f33577f6d5ec0e7b8fb2ec6');
define('LOGGED_IN_KEY', 'cbc12ff0fa4fd1ec7db725c31b0b8ade93cfd7ebff4ab7b4c77e5e479a5a971e');
define('NONCE_KEY', '66995306defd91a3a36235327ee91ef89a3ea08bfffb0b6d326c8a25158ac6f8');
define('AUTH_SALT', '0cde9303b1bc463d3dc601357c2bea7ea22538392c98fa44b9bb8d24062f2f7d');
define('SECURE_AUTH_SALT', 'a0af0446a8a2f1ac6b0d97bc051dd29fb6ba448f5381e00f1a728d587635aa82');
define('LOGGED_IN_SALT', '5c23614b7ae8f4f348415374d3f791bd6bac85ea42377a7665c642d745fac72a');
define('NONCE_SALT', '7da66278ee3ce365d24fdf9f166c15428611f6c2fe78c72c3c086ec2904a801c');

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
$table_prefix = 'FJh_';
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

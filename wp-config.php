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
define('DB_NAME', "wordpress");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "omnix360");

/** MySQL hostname */
define('DB_HOST', "localhost");

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '6b437c926e34f8eab9e1a3f6865b56cef88f1e4cc4a865873a048dbc1a15405a');
define('SECURE_AUTH_KEY', '309a86774dd4aeeaab62a15d6a5cd1784b0eb37f693d64302b6cd08c6f8841fa');
define('LOGGED_IN_KEY', '27c7bd8ce52a7992a33ffec60e35dbe1d991feda1facee26fe29be49e78cd8ee');
define('NONCE_KEY', 'a7395bdd5b2575902b981f541a08107de6ae06bdeab42f9af1d3524fcccfd902');
define('AUTH_SALT', '63dd2e85e810c0bf3cc8f4dd9fb3d1257528be5d1e1c2a26dd1eb47f377f15d0');
define('SECURE_AUTH_SALT', 'be6e46a4bd729b1778045241bafd84bfb1b86042ce4307f9892bc96243ad60e9');
define('LOGGED_IN_SALT', 'f22ae5727a03798e9ef436ac235b09cd7c9fb94a0dd30c4a4f08d82fda10a392');
define('NONCE_SALT', '42f3fe65b9b3c3817a093a4f70f570fec164ba9f1a0dbed23c02471afbc7f349');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'XVn_';
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_AUTO_UPDATE_CORE', true );

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

define( 'WP_SITEURL', 'http://localhost/wordpress2/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

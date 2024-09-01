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
define( 'DB_NAME', 'i7605932_wp3' );

/** Database username */
define( 'DB_USER', 'i7605932_wp3' );

/** Database password */
define( 'DB_PASSWORD', 'V.nGIyGnJZ5JBVjomsU03' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'yKV0QGvQ7htJQKs2YWBFdSaQRvKV6sxOFhcBxXjukT7I4ZwCCUG3gprB4p0hLIGd');
define('SECURE_AUTH_KEY',  'nBujSZIC7p7sm6pZjq3ID0tEg2xFxCygnIgiPLfJIw7Qbh3nPtfWAJeEoabyMB5H');
define('LOGGED_IN_KEY',    'RevuVsEBGheIB9X2rohHWMFpSrilwy96J5GrGagCsjooK3yNGThV6zI2wPX58WDf');
define('NONCE_KEY',        'bPRyRCBT1C0z48M2cPbrmDHFP4c4QaZQfKsWbYeNTJEc0RA4nwTiOiK2M9Al5ckQ');
define('AUTH_SALT',        's2WwT3qOQXR4MiIOKdiHbykn7ss7OPlP2T6lusnsiZIIVkrMuYT1amdeu1AM36b3');
define('SECURE_AUTH_SALT', 'kd9mSykvnE3cWk8TU8rpNN79EB9847u0ehSktNPQqvHNvRfUQfnI4KZQVYgbEENn');
define('LOGGED_IN_SALT',   'svoAkqoZJxnjDAA6DRvwdMH4yqJFrGyCRxHVrFvhCHeVuwAp6bqzSZadASETqPr1');
define('NONCE_SALT',       'NWuZwRvKYdVzbSF5sNqxops94ah8o712AIYr09NI2tBO8e9ObfBUs8ZfmXqPe1pI');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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

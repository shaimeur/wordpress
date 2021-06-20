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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Mc2owQ97gpjQOHsHe+Iwhd1HLx87AJ++IoZlRvNdSvnPcrKjrHwEWr5sHoQg3N4opMpkxdVtzkgO0sijerGpBA==');
define('SECURE_AUTH_KEY',  'sY6lhTJC1qzMddtsmbrLNANjOzYu9HTMuVTjoiRkeiZo8AhU1+JKaTwobWdC3YfeJGcmdK12uBdyqo+voG3jnw==');
define('LOGGED_IN_KEY',    'FF81obuOkPyeoZIM5Mc7yTV2emt8EkbF09UUQFAGoUqxPvD64MK/gtJFk3w+ysjfNsdeoWwI6kr4u/xRAWNvZw==');
define('NONCE_KEY',        'Bj7qkHReP86q/LQaMCeILdd+AzYRHPPB/HvEA70RMs1isLJd7Cj4ESy38B195X73ywxwENK6Vbxc6TyP2hryKw==');
define('AUTH_SALT',        'YSJN1xzdCkJedlqBQOcu2sXpoPyXjhIOYer/Ao8+OEgezKEogW5zgzx+ml8md0sRF4Liq3fU/2IVWwVW4Fgocw==');
define('SECURE_AUTH_SALT', 'LYqXSHwT5tmVQfmp7soqoTh67G0STSrEFFFh3dBVK9lO+lRmLUQUwkggq7gKIOZ4rIXvsNUChbzWMzHZWRa5JQ==');
define('LOGGED_IN_SALT',   'uwPq7ulX0V87IrAy+wWDhJhLap+meKJOPIZRoB++kDjHtJaf3kYm+zlAi+7z0+kgSVL2XUt3jSKjYY8d5hGvtg==');
define('NONCE_SALT',       'zuSUgH3Nu8iZ4xRrhsQVF8FrC4ootSSWaLJVl6onjgfj0hg5aYpI8cEBjBh+MD4k+FGTWtOwCPU4N4Vn4TNuAw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

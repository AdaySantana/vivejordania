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
define('AUTH_KEY',         '2169G1UyxMjqi2nDeknCEpdR2fws/Hsld9+HAirtDrtufwVVdkNm6UzZOSZxoq1gtSw5BqABk9eIvi5toeRLcQ==');
define('SECURE_AUTH_KEY',  'Naur8epUuST4iT5u4tPOmvomot3xLEG4RTiqU16y3h8o5dclMqb72H5kVaIkTkj5kQzjWZOIDzpqP+YBw/ptVA==');
define('LOGGED_IN_KEY',    '7226VaCnNBJ1J16jfp+m5HFiNvSrAC7zO56qSid3FfbOICxE5KIDijBUwAKtgl3OPgVgazzFHkPXPWVRD++xgg==');
define('NONCE_KEY',        '5hSQU2BsuJaE8oVZtvozXKOyk5dIgK9AhX0oNzSPA+CtIX4LV5LDsgzwSK0aG++gIAeh2ALgmwMIQBxOOT6l2Q==');
define('AUTH_SALT',        'g4WKjUxap2Cz7frnaVQigQ5n0xUqbr5t/jtsqRnSsdqlZzXXkI5PHEQ/72GdPI/WGHATYytsgkPIIxV0sINwxQ==');
define('SECURE_AUTH_SALT', 'Y4Lq40xlEo9rC7zeVNWcz3NBGI5gExMgCqpWVi9qXS4a5fEXNuIJMwiyE7ynGCvWyY/pAvp48B9aI2giXsI9aA==');
define('LOGGED_IN_SALT',   'IFO3yIFpWNowoxlZt1gvpKnAYc0re+q0qlmENJIUSzwPyktdzfKCCwn82FwmqJd0AmvHazeme1PSRz5FAvum4w==');
define('NONCE_SALT',       'wlhfsUsFpX0jzoSiVXPv04xZIhn2hc0fNs3/cdWaCOiyT4ZA6TWEZrB5ovFYblC2urVeUYKjlAXrfyohb+dpOA==');

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

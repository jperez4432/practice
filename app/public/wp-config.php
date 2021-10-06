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
define('AUTH_KEY',         '1hclFmxSOeOuDADTfvtIbI8m9T5QC+TSA9/PeHKthcDd2rJNdRPh78OfhxiuAINZIml4C34sWf6NDrRTlcA4IA==');
define('SECURE_AUTH_KEY',  'UA77eQOIBslFOqdeb5J+w/jqoq5ma37bEktpmGgFy0TzOMy8zu9AT6ln2zYFx+Jvt/uqu6qbg0ojUJozq2i2hQ==');
define('LOGGED_IN_KEY',    'ZfU9VwlV2C8kCrqZRHtW3JiE8vGPbg/0wW7XYXiluCEXuNyI9wvA94NEwv1xoKBtcyFRwwYN07R+JfhA46y8zQ==');
define('NONCE_KEY',        'yrS/sxLCfRlEt1b1r/X4vsFFtO+/iN3iFsvXPgi3WXTKNdzweJvYngbWna07CzXWbtI2n1AyUTQarG4+Mp3xow==');
define('AUTH_SALT',        'bvkc47X0odil+pmtILyoHBFxgYypZShLqMsXY4lIEfDNpTf6m57mkJdXDmOL/YAnjxgKtQ1jixiICWWHZvCW1w==');
define('SECURE_AUTH_SALT', '3cwcCS5bPdqxNoxAPrCXdV7ul+MKrPcS4cBJt8q2ZNgW55Zk/3vO5FCmtmeFEmrcQwREGHzEkq3Y2iBwTAl4PQ==');
define('LOGGED_IN_SALT',   'EFh3LaSmqGy8ioE3vZOErWMKHeNIRZdKJRVzNfZVBFRQoc0IE6WmEPO+VcFejozI4Lu7u3tY3hRJv08JeKbTGQ==');
define('NONCE_SALT',       'F5I5YTvJ/UoyS8Jxr8HoS59aQ1hX1kW++9WK5/LCbwt2gXiyecLsTmAQlbTG5CyocqJFT4jbmFRdItXcNOi2PA==');

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

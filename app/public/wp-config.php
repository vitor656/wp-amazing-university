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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'ciwhG6xSKMNqx51GtDyjG3nVQkZi2XTjxzmQFg1E99oZYcTxuehEdr3kSoIy+1caj6apGalSSHsCWKGE6dSLdg==');
define('SECURE_AUTH_KEY',  'ty00rFSmSWuAIBzIdmcOBc9WwBzqgrq/dYNoxn70Mcx78owUYZsGXu7fL0Xx/3McXxrXSLA+t/dVdoO+gJWGhQ==');
define('LOGGED_IN_KEY',    'wu+9C79LXtrdX+qyrSSU5NUgxqciLWqz+QzoWrjuAKEMFJEzthhRwElSvWGvighDe57M+Hg06ZSvho+cy6hpPg==');
define('NONCE_KEY',        'fBCijMoE6wQS6eVtaQwUDFszU0CgyVYYLurzLEh85v1s4uqwmv1cj2jgdO7UdnKAOjGGeeqtXPz861gTwuW5/A==');
define('AUTH_SALT',        'q5PQgGbt6WtH7Sxy0BORDo6eaTaFNzForxlLSCT4nS+10BFZuy+ubsvZjV7ASpdsWoH5/Z8MDoENTf380R/dZA==');
define('SECURE_AUTH_SALT', 'jarX+4Wq7WngoA4ij6wzM2yaK+A5074CMzv/ay/xiWBJk173Hmux+gXesrOIv3FaTNoP6Q4PrGnNAWDSmqqdYw==');
define('LOGGED_IN_SALT',   'RxPnKGnV0YXGmX45mT1Ksw5kMO8XIhtZJbxyB6eL1cAyTEgAPBbTfBDO49RWFqDqH7UfLpZZSbCjkAVUkoWASQ==');
define('NONCE_SALT',       'sby5A+hFxaZpTi9Ms1tMBeKM8CvAxe981YtUf3G6cQj5tXO6cDwa1lg8afk2rfN5C0SuyxWi4nMSxHHbSiPxbg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

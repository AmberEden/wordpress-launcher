<?php

// ** MySQL settings ** //
/** Database name */
define( 'DB_NAME', '{{ wp_db_name }}' );

/**  Username */
define( 'DB_USER', '{{ wp_db_username }}' );

/** Password */
define( 'DB_PASSWORD', '{{ wp_db_password }}' );

/** Hostname */
define( 'DB_HOST', 'localhost' );

/** Charset */
define( 'DB_CHARSET', 'utf8' );

/** Collate type.*/
define( 'DB_COLLATE', '' );

/** Authentication Unique Keys and Salts. */
define( 'AUTH_KEY',         'pt3NRFlgyufWmk32' );
define( 'SECURE_AUTH_KEY',  'pt3NRFlgyufWmk32' );
define( 'LOGGED_IN_KEY',    'pt3NRFlgyufWmk32' );
define( 'NONCE_KEY',        'pt3NRFlgyufWmk32' );
define( 'AUTH_SALT',        'pt3NRFlgyufWmk32' );
define( 'SECURE_AUTH_SALT', 'pt3NRFlgyufWmk32' );
define( 'LOGGED_IN_SALT',   'pt3NRFlgyufWmk32' );
define( 'NONCE_SALT',       'pt3NRFlgyufWmk32' );

/** Database Table prefix. */
$table_prefix = '{{ wp_table_prefix }}';

/** WordPress debugging mode. */
define( 'WP_DEBUG', {{ wp_debug_mode }} );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

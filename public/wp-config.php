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
define('AUTH_KEY',         '+TaBm/5luZUhL4mOWZBL/J8QdOTP3LWgSMlWXZ1zjKNGm2rVwoxzxXxKyDBDMPZ3zFybNsPkRKhnuDWiN+VNCg==');
define('SECURE_AUTH_KEY',  'XBwtfkoWb1Geh7ZEFBfjPE+8jFUJhiGX/5YWp7AH2o+IuelLwRSfHpiQPV7fqQaCU+xVmvkoPf3CFNkhc2IVjQ==');
define('LOGGED_IN_KEY',    'bQASWdUtyEyggKn2m71uqmko0kk5gbsPyRoTb6eagVaBDPdlMmQdg8YT3VpM7WrcNxwdeOKWGq1aboN3SwacgQ==');
define('NONCE_KEY',        'PL1XrKcw6/9PmpPa+5kub+aNvZVcX94rz6YXo2MjP23wmInT6V9pBkWbb73NFF7UpMKM39UwqUbvXLoV9zY2pw==');
define('AUTH_SALT',        '5HXTHIY6HuDAVRzumBt3l3OorDn+3QqP2+7pmUBIbuKP0Y3Dr4gepRvxfimLNAXmSSP+7X7tUdRoqUicaxNRDw==');
define('SECURE_AUTH_SALT', '5yVsoa1x0rNW0lUJ3j+wReBaUkB92chiXf25IRQJOUlfelb5dQacfDOeFd9r2/2uZx/wAjQSH/ak+gV49FEsgA==');
define('LOGGED_IN_SALT',   'h8Ts+XPOP6v90XLL3uFOzsGHZpw4ovtsjiBMpwrkB+F6/WnjjUHLlVLgFfvJLbOkf2ax6DXX9jOuGxar9NLmvQ==');
define('NONCE_SALT',       'ZX0CaGEKNf+DwvjZCA3o25RqdTdSsa00KWGU6QJ6xt3nlbF/LHk4wTlIZBz3eDhWjpnDW4Hn/2V5oLnpio7l6w==');

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

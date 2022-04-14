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
define('AUTH_KEY',         '4JPl49pu6Xz5rPzADCIHFicqSnKivSTiDYwTXL80xh3Iemynn7lvMA5MNt/X0VHWiHnSTVumTS6gxbCf82FJDw==');
define('SECURE_AUTH_KEY',  'VKe5Et9KacfoiLvlWsIJ+RNGjHTRJpMS4u7768Oq62tsDnislPR0kEEaQ3G9LLAZjwymSaAD8axisgjJBsCWng==');
define('LOGGED_IN_KEY',    'wLzCeqaehfQ14/jiYjVdYwGkEq5uGbTzlwOIuHVGlz3M5Dw3Kat81qoteqc31RiPczUwuPzD71ieo27D42075Q==');
define('NONCE_KEY',        '4nXlLO6alG+VF8BoQD6AtSeej0LD4o40JDSztbe1a4wjE+uIud1PKAZoCcrmNRdtbEYxh4NM0vbuuU2ptiLhGQ==');
define('AUTH_SALT',        '4JV15SaUogD3XkSSh5AoRl6bkAD9bZrEYYomaNnkWbCyOsFSffXssd1/HH6bMIkhXd4xjJmya0ZqOIRlQVw12A==');
define('SECURE_AUTH_SALT', 'xsU3dBeaj5nNRKeg81exUXaI4HVriEI1LROJg4Lbaj0J64HBfq+3UmfznSJ8JkJmMLZDi8AXlIvnRsD2HNhypw==');
define('LOGGED_IN_SALT',   'ZThL85e99x8DE/9YN1IYRZAAUQReAUkRmWBwdSLnV5GWSlltwbUTejlfj70nvNd2c6/Fjdps9nQ/jmni9/grbA==');
define('NONCE_SALT',       'isxbh2T7x2iE2zR1xeVodigofSAPBywllFRCJ6PX/uiRHkwRqHJKt7sPl7QbxavSwGCaqaqdfel1BQP6IXS1pg==');

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

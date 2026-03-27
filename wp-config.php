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
define('DB_NAME', 'web_dau_gia');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'Zl@WiT.8s0,[ZoviD+/D Ddx3b*R)NTM_7WynH[!l;>!gpnm6 eO#;)|J]f/4g@:');
define('SECURE_AUTH_KEY',  '%Yg/r`%T27GlIhr}uWG?x!neRKgg4 fUY6>SzXlXAl%cQ%Zi@HSl#(hF.@kW#d~W');
define('LOGGED_IN_KEY',    'GyvJ4$|3J4<T9h^i{Thja>%{q_0(pT@mK{=n``AVOMff> $1F0ofe)y#JTv7vH35');
define('NONCE_KEY',        'fE!/$hJu^v]o>!0 }LNOHS3;M(w-{^K(Dpl4|a[3tJ>EF9k#Jfl{a32dlzfY}x}x');
define('AUTH_SALT',        'p!~.0jwP2;kMW;IIdl<hhKOjw5:0y8}uc>OE02;J&K(>SZvfJGp.H3e7i.P/M;#n');
define('SECURE_AUTH_SALT', '^ln!sUXFKI>U4SBBDi vxQ^O?=dg<F;b]5OUaUoOln={aqjuZ#R 8&fQw~WN,JU-');
define('LOGGED_IN_SALT',   'D]#q=(4}{9Gs?[sbi9S|T&s>YawD*np261x`d@lfZNZ95ZT}K._x~/WIT?@0J8JJ');
define('NONCE_SALT',       '!BFKjjAp},JWlf7Vr8LtPFOWRb,X6=%x*8+QPc_(C#}HEow9?#)_h`KD_OJpet*+');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'pdwhalfv_wp5494' );

/** MySQL database username */
define( 'DB_USER', 'pdwhalfv_wp5494' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pwz97]2@SS' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'xho8zsxexzggp9xwdkrsfl5srnsin6hd1zzvb2vfblt4kgq0y7vkhq74cx2juxnc' );
define( 'SECURE_AUTH_KEY',  'qumsuqlpo9s2bfgv4c1ny0m0vqrbfx90osg2jyur4maahmgcgditctucw5ay3ans' );
define( 'LOGGED_IN_KEY',    'twu2cldhvkkeoapohqo3uxtnxm9ahjpokdadfahwpkb0mujltkccuc1czbct7xel' );
define( 'NONCE_KEY',        'dpmbm4vfjlj11e2xs0yxxbmq7kcvxegvvaty1nufgqduwx53luipbxhywulnvqfr' );
define( 'AUTH_SALT',        'grgprk2nn7nkh0ud9yocqcdfwdtc4tghtygggjkmp1f1gy2avwrm4xbjqxataiy3' );
define( 'SECURE_AUTH_SALT', 'yc5aetg4nkhjgdpla3ghs90uwpnxg4fhmeinwyugw2eitsoqn9usjm67q8iqa8vf' );
define( 'LOGGED_IN_SALT',   'qfro2sadut9dur4zguasmzwo7d1lhor4mp8bmmcrakrhdigjfxlo41dk65tyakpu' );
define( 'NONCE_SALT',       '2sbaoil7eija3fbm4xp351vhy7yovqdaxgk6hmfv77sur3cpvt5pd1bawvyreblc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpj5_';

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
define( 'WP_MEMORY_LIMIT', '96M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

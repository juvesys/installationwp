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
define('DB_NAME', 'ssegycom_wp227');

/** MySQL database username */
define('DB_USER', 'ssegycom_wp227');

/** MySQL database password */
define('DB_PASSWORD', 'I!M549Sp3.');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4nfsulfze6kqcmwjmxrbetucpor93xsrh0sx5phgiw7or81gxxx7rxmlzwgjq7lv');
define('SECURE_AUTH_KEY',  'pgymbx1drfbhkk0syvdmmtwe4e0ghwgz590fl4eva9uyfmlblsgmdlwwd6f94nax');
define('LOGGED_IN_KEY',    'i1pmbiyov8jb4nd7w43p85flxdahwhmfzjtxvv1fcz2373ud0wmddjtqwssouy7f');
define('NONCE_KEY',        'kwohrvmrvjmnilrafgyyhfvsjd9dnespflaydhtjqpgshvbz4qn70ylhdp2tki8p');
define('AUTH_SALT',        'e920jqnfp5fmr7iik4hrtumr7w30sw9ni6nysjmszkjwztgetfcm9k4fs5c44cz8');
define('SECURE_AUTH_SALT', 'g7ftwlrewnpxtaoj1ckhvvlqc9cyl1c39mckpj1yit4f0r8bmpbqjsczf7tsmgdj');
define('LOGGED_IN_SALT',   't2pb6c1q9f2u7pfz2torikkza0b6clv3lvtcgu7h07mmggmsobwab6yn29fjcsao');
define('NONCE_SALT',       '5qokre3lii8uq5qqxxe3sduim1thgxpgh6bbiysjyqgyasrfxjrkmyhyxzvd6vaf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpb8_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.ssegycomp.ml');
define('PATH_CURRENT_SITE', '/wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

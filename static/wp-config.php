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
define('DB_NAME', 'narlukada');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '^T#PHx40yR:ctx1fBC9lP03w@!y*:9h6|BS($]JB![;Iza,Fi=e ^MO;oCS+_MQK');
define('SECURE_AUTH_KEY',  'iV0cPWPFS}fWzfk0vI~_HT7bVLk,z]V-@cfc#<Z0E|,,}C#Be0e`co@09 k?f|J9');
define('LOGGED_IN_KEY',    'YN$QsUb_?lr:+X9fo;?$tjGjcUWu83UnD%XD,ykXCyB>fHD7-,2 4SH#`^ynQeU9');
define('NONCE_KEY',        'L7Qu%+eppX]uA1z7iRTdgdibz5Kn8N<3;5+ShFpakL9Gi>s9#HJuCt^CR}`)u`<M');
define('AUTH_SALT',        '9p?ip0MI|OP^-Uot$F44/v1Ey:AG(&zN2-!0h wBDncggB*cT/zYw?U7C7tYF;G ');
define('SECURE_AUTH_SALT', 'jv81^4u]dy:/J*_<L_@~$c|VDdhbqwO*s)fUe3HQi9DEwS4H~-L=v>#vAXTa4wJ_');
define('LOGGED_IN_SALT',   'gb?|D>s#<v<KKFTLy%.9&TJ08[;;Cyls*|jw~@m;zInw|>rbf~`I8X;wqE4]*N@]');
define('NONCE_SALT',       'D*n`,ZE;B783!g(<~6o4y~*rx6i! $^k!7VIFr&6&@ />0`hz NxP4aD7#NcsS.1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

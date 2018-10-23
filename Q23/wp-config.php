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
define('DB_NAME', 'q23');

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
define('AUTH_KEY',         '._KiHzE/.dc]N4YNP7MlsvL9kya%x<1dpP^)#08~Xjo/EbjN|v{]r$omByqEA~2J');
define('SECURE_AUTH_KEY',  'ynu]&P7K_L[$sFYdf( KgM/,dZE|8pCB7j9W,J;.%xiY<S!HY{akm#%60g:[mHss');
define('LOGGED_IN_KEY',    '=,`w v< ;yu;ak5724L:GZJC^cRr($(DeQZX};}`(I)3&W#tSJ^kSUFgU]NG`dn:');
define('NONCE_KEY',        '8yvS3K[][E4W#~cL9MEYq+[G0,QNrp+D2n-Tl]ibpZ=%~@l44]MK9PJgI~h~^:E ');
define('AUTH_SALT',        ')<x-*8P6Qu{2`BX@}=DTSY5|*As({5qRJ }JgZUluC&`Yb=2I5!jYKmCG<GlmfkL');
define('SECURE_AUTH_SALT', 'e.0b#)w#><n;M+eD{3p0:]&KJ#`FN ^C:*wQa)Nh_m5N+HEsTu #TB4-9DA&~eHs');
define('LOGGED_IN_SALT',   'B-H#m)*by%$?j@N*WDAAT{eL^74=*O~){(9W>CI%7jHY]$#iSSKT+ O4<?>u:}ja');
define('NONCE_SALT',       '2.!:4:D W3ofLKH=ug8n|Tw@qr!CLlTqiYzoZW|x~McWc=u>$I$sMhss^kwyP=0*');

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

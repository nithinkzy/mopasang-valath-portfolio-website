<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u273824511_k4qiO' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',          'w3sBUCf#H2=Y:k|)~_%w);)4F91s4u>j<v{A;S6#jb2Da%C.Bul;`n^.&W4tng?S' );
define( 'SECURE_AUTH_KEY',   '$@o( ?E}:^;g|YnM5/}vX-jk%G=EAx7%VJ5gB{uW5_vZ7Lb- 2r^5N*uesQ,thC.' );
define( 'LOGGED_IN_KEY',     '!#dA?0/P+tIvkbc(8>Ldcj-)2x9]6<==x;//`Y_zQXh 6|@bqIoY.0UM#ObO=JyO' );
define( 'NONCE_KEY',         'jVxsmKVpDR-pZxzbR<mQq!/!ia3Zp~1dhYU{! uo!Tdn@R8WzbJ+JO(]wYdZR/0g' );
define( 'AUTH_SALT',         ' e(+}:X`qq9q;Ft+ybF#dne,T[vyn3MMjmCd!VyQ06hMfy}bMy){cX61IX@G1#,p' );
define( 'SECURE_AUTH_SALT',  'bd@+Le<-)Z^|gE8-uiD%.-_pB*KeU$yO]8%Q{r6&h2brTtZ7|te8Zovd&k] wmDg' );
define( 'LOGGED_IN_SALT',    'yi`iP@3bcX6bU7[JQ>[m;[XCHn)F7J@6;G_K2A9wyCDqGL4C?Pq{1IFuBC#iK@Xj' );
define( 'NONCE_SALT',        'eV ~Hcnk++^ydwlV,{jp|Dt7z;c_s7]Wv0mz?o^VDpa[)QH+?A%YnT^Zj,pJ<^<f' );
define( 'WP_CACHE_KEY_SALT', 'fS q>xTIQj}V}LXNtjP*Cb}J{^!e$ArZDU)0AZ599Z*J$q=6i;IGFdWlV<VH]E*!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

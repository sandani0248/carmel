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
define( 'DB_NAME', 'carmB10j' );

/** MySQL database username */
define( 'DB_USER', 'carmB10j' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zQXL8$25#km*' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DISALLOW_FILE_EDIT', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ce_4|zS/qr0(27d=SsC[w--}qJMw_lvW$DV|B?4V{;3<-@&.OeQmY@)/V3[zy:8Q');
define('SECURE_AUTH_KEY',  'qb[+}K_4bAv)p7|0p?H64T5jk<HwU-R$u{=[-GB{|A]|QtD,*a&Xpi=gV~a!&,YX');
define('LOGGED_IN_KEY',    'A=~w<C`QI;#YBy?H?]}c7Y{3*Hgy}vBW:l%TW]<x-?w[jg|5;85j28|NUAII,[-g');
define('NONCE_KEY',        '{J|`1?Z9v_.|`F]PXE <onjJQD1|q:u+3N5x DB_|6~0ai/TB3U1$k=L6oZe8*w.');
define('AUTH_SALT',        'wmmE@Bi<-,_pCMw|F;<4E(]9|3v|equlcks!0XO9-/m! i=W;@5Nx%b;-<4H8iBI');
define('SECURE_AUTH_SALT', 'vefN;^+YW 3cT<;G^H4ki|5CKJj8us)0bQ-gg%tRX*c25?76;.wAslKEQM0+>@.]');
define('LOGGED_IN_SALT',   ' _,w{7}hsyxKJ7C*u9PFN z;jY-Op?bT.b;DP;3YX>#Xeg@ J}|6F[$|?{[|-t(_');
define('NONCE_SALT',       '!U+IslQCzcXWuC,_083.Y=A`L&^}3*80em[KFE`m=098?0p~/xKP(U^-q5I,v#{@');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';




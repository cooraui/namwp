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
define( 'DB_NAME', 'db_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'O@cX!/=9_!*NCXkT7$mCHa}b6~ByY^d1t%(YUEe;L&}03^@#P)fi36&=f[@`jRfs' );
define( 'SECURE_AUTH_KEY',  'Ce69F5J{d3K!/U`xS#j#a5cRpmRfg&X}+`LJtwVt*?xhkwX#c?rY4%UY^7nmLr72' );
define( 'LOGGED_IN_KEY',    'zBd(qAlaN*_8d$Db0!fy|3F~r&O7$wf-_fi2v$P>V<hG?W6KN;KlC% ocNmR/Kue' );
define( 'NONCE_KEY',        'J]8fMia#)m[rx;Pw|!;ZhSz2?&|IS-/.V#Mm0,,XU~K}~1ju Tk{GO*9l%};|Yxd' );
define( 'AUTH_SALT',        '(*(c:,4]Mb`0}=]bn/Sj-]5Y%x@sgZP/%9}isF*&h^tD4K@ai5c5>[A6Hz24r*v>' );
define( 'SECURE_AUTH_SALT', 'fFgJ!j)7N9|^WVn/t{/9J^gO24-h(*I<>aY +w7RBW`.2/n`gT@o>-X?!5[FP25?' );
define( 'LOGGED_IN_SALT',   '`)sL~:T&37eKe1+G3iJg,`4fbGstHL%ZQ42[8K2ID?Q.^27llT[BH-s#0^lAPTpB' );
define( 'NONCE_SALT',       'PUtK/r`XxLDcSLb$!L|`;u=q3t)+*h:;dTyoSK<[>Q/yETY48Zd-M4ACbPBRtf:N' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

define( 'WP_MEMORY_LIMIT', '96M' );

define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
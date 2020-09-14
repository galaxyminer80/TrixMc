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
define( 'DB_NAME', 'trixmc_db' );

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
define( 'AUTH_KEY',         'Z.!49%5VUr<:5,CY7ZTnDlvV%#ELv8S|4z6n3G:8Pnkzy_,nbk[]N?{+AmJgU{+*' );
define( 'SECURE_AUTH_KEY',  'f7`kbLd8K7rJSBRNxw$xl.Pr4.sf&};^J|;;^&DBXIP}qJbDo[]?NLQr1a:<Ctpf' );
define( 'LOGGED_IN_KEY',    '~97d$%m0WVOy2wVo]|5fLxeAs-%$c)S@fzoO&*bCFR#A:C|5t9#-bgaxA2ZD21Ws' );
define( 'NONCE_KEY',        'VdCTvr,(1g$t=j?Zuq7<ZLcX?ZY}2>{YFKEj@Wob5AxP<LP:^c9l?2`5yNd+Pqyt' );
define( 'AUTH_SALT',        '%{K`}vW>H~Mxx[f%}|sb?5_Ag<>L9:1r=|(MYKs{]Y:Pkq|E8sP D2qvQVU=HP>Z' );
define( 'SECURE_AUTH_SALT', '@%DEzM$5vJl6v@Km^np 8,(I+u|?c}#EpS0b7 gGs^;8 Kno7GP8M.?FuP0!b/kZ' );
define( 'LOGGED_IN_SALT',   'ZcA~&;5-6>}|&FqzW^},rz(Wfk:SqVR*tg796&tlqPO: Yj8V>|@J{/O?%+6>RkG' );
define( 'NONCE_SALT',       'p+$o`o3]jHQP&(!RS?t 13zhj?TZ`8`$@h=gVda2D%xP+n]?lnkPYN0 `:]hZ<I`' );

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

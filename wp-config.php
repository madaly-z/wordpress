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
define( 'DB_NAME', 'gitwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '(D?}yhN$@9neJ>G]q>p%GlM;p`qMXQY2_;;=Mgr-U^K*BYE^iV9K :SqK2?sgNp-' );
define( 'SECURE_AUTH_KEY',  'v7^Cv:Qv#L)}F0KvnglJ,=;`AY0rRury#=cjelq<wY*bTais 0+<pb0VAXA$Zlbq' );
define( 'LOGGED_IN_KEY',    '=)1w;E~+?MsGpich/;9KzAE9Z=t2_b&-V3=+]AT#r!c,B2AmBd87</vdv0M44fZC' );
define( 'NONCE_KEY',        'SDz)e=mnj=?f5X^H?DhC*[`6W !~X`&8HI!m%N$?_]vjmdsbOB&U0Q}#xF3c{ETp' );
define( 'AUTH_SALT',        '<0H/6:bsKLEv!gbLA}}F=<_@43z{C?2C75CZC3_6IWPGJ>o(urGkW(6br>XpHm_f' );
define( 'SECURE_AUTH_SALT', 'S/c%HE>#)`+*)+2aS!sn0Pt*2d%+8DaR4clkm3Z^Cxo}WZ4#?E&+&;,J8eylaZdw' );
define( 'LOGGED_IN_SALT',   'BL 5Iv2a$$%mIf{;W^-UjybKvM)a?[NN4yAJ;p7O:*90BIhdXi1UraXTsn[c9GfS' );
define( 'NONCE_SALT',       '[R#jHQ|10tc|)hZLZ<RSo90b=7it}@X-{m_#^<9X(,jjQQk$)^^2Kvbs!4>IW_!f' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

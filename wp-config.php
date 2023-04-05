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
define( 'DB_NAME', 'id20195237_wp_fa22a2cfc8cd2036aac40042097a4f28' );

/** MySQL database username */
define( 'DB_USER', 'id20195237_wp_fa22a2cfc8cd2036aac40042097a4f28' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a5f326ff2db714650a8914a40f57e216ba4e9de3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '}:7_mfc7MoI>+HGtd(w!g[o$oJx#Y3:Nh,.BfM#xx4(z*2mRn!!N*k+vXkAwAMqv' );
define( 'SECURE_AUTH_KEY',   '%t3`~9BXxnJw>Q1HDV|~DdHQJ-(7>U+4w<gA+]jk&8+A-FSCM+X_LyrgA]}<-4:9' );
define( 'LOGGED_IN_KEY',     'VuyljILNGg:o2wHR[EotY`&+LC9BDw6 :q&RUaF9 /(ck$XMZ]Ewu9nH}DW5ICD8' );
define( 'NONCE_KEY',         'rK`}xG6=hX1?oWF*?mT?v8vT]Ht`knMwoK0Y}hm4,yOuV?y7|O!P|toB&{3}-!MK' );
define( 'AUTH_SALT',         '(hv)nik^Go]_mQU[A?Se}dp|kp5unH)7bM)c?*^LQK~1UA5aV=8r@Jq8hWIif3cl' );
define( 'SECURE_AUTH_SALT',  '*Bj1+z1q,&U8VN#5 oGa$[FxuyUv)Ini`?0(^QZKF;Wr]]O 4t!fz{PrQ@Q.x$dF' );
define( 'LOGGED_IN_SALT',    '<ynjsv0H8~w3LV_LA$8/3ItoR^*Vc5edn/[JoV-A+wfO^vR3:ABK):aJ}y}BA@+v' );
define( 'NONCE_SALT',        '}ttiG%) FJ93!;aZER[J4i^5z)<;GS?3{Oy&9K!uLM/C0cc(T&q$0YiR3%;@)[8o' );
define( 'WP_CACHE_KEY_SALT', 'ChWn[jb4xDUfYa3vxcnGCg*KXA4!0.Hn[V3akQUaDCR5k6K`POLsbfxaxD%gsj;W' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'wp_quest_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_quest_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_quest_pw' );

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
define( 'AUTH_KEY',          '($x~O/E)TVr!iQiLXvNw?:|=-m7.]<u&}:bL&D ~GlW_|aqhr%`ubN>I@HYw8ISw' );
define( 'SECURE_AUTH_KEY',   'vDx Z}idl,u1ks_wIo#t1Ieeix;^Q0j,fS*3,VK!p[MD^O?eo=e/42f/(W+5iIh*' );
define( 'LOGGED_IN_KEY',     'fmq~X;DYxirl>md+l &`-n5y|[O<A*FHu3A{Bpcy#tE;A52w5t210)b^wZ@b0*~a' );
define( 'NONCE_KEY',         'r@%W+29=+nrqV14(#^GXpgELkG.-xF;#]GiK6DlfI!z%$;2m.J[RieB1aO&Tr)!U' );
define( 'AUTH_SALT',         'dLBsD>mj_%?I]L2|UqJ?YBSTUws$FFa<7QD)J_XM@#=p7SF8pWT/P:(~mlzfrO{<' );
define( 'SECURE_AUTH_SALT',  '?0O2pmpFGhOtKc=%IF 7D6{&$+70Fg``zC$h$0KcP~q01LIj>-55et.kR;0NJhh0' );
define( 'LOGGED_IN_SALT',    'W@X%/wxARqjKqHfXjNs#@|w]}FP2x`:$qLcJ3, Z5.19A*7V.9c/_v<X?sX~/xOn' );
define( 'NONCE_SALT',        'rEc>vpv-10y?{?WA2QVRHJbl>JSPmx^g%C]=SE9hO{m nWODXRMjN%`SC_9-rI?d' );
define( 'WP_CACHE_KEY_SALT', 'y(`jx=,/_ iTv+`>bs>*:Dc/il<Ys;0)E.0B`*]540e1tjyL;by3#0Cb{|;7Y{dY' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WPCF7_AUTOP', false );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

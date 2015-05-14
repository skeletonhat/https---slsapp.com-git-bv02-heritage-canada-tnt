<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'heritage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '7D-4HGhMvA.yqCU{+f`Ezt/By5!kA`+/HesK9Z29CViPhWq%aiH:Vh#,qwB*<Ci?');
define('SECURE_AUTH_KEY',  'Jc.ga#^mwoL&P0~`*qLsdSnD|rA*GZVj<`_L-/9BZ-YQ3L.UENBj>GVgY#(raL;?');
define('LOGGED_IN_KEY',    '0R#pgD+X-wnYgvE ]y{31dTc@WD1N3whbU)!Y|m;^A2El?)[AZ6W}b_YuK1Xx{R|');
define('NONCE_KEY',        'X1]O,p&u$|#S!*mTjx1)lZkf2cev68V!T+xQtx5fA^, -h-wk?|*Z/|ioi<>3Q2W');
define('AUTH_SALT',        'Q*3.*4d!+AX@ NWec+Q*!_OvY5?AkO>oX~Rl+l>l(5lA{%39BLJWa.Oi,$B&y{~$');
define('SECURE_AUTH_SALT', '9b?kc{<$a)9^3h<eX(wpW{HdGuzCf$%?5G`5uQE.bAJl^S NS 1i*wA[(G}M).$,');
define('LOGGED_IN_SALT',   '/M}F8b%Wc+s-U]-7yAuY-VlvUZQdEI1^hQ^wrPiC&^JmTXx;f;Fr%f_w3hi7Z0#|');
define('NONCE_SALT',       'GkK}6coe0A&0(tJe:*yS9<-7r*A +[Ix(Ot8xw5WY)c/nlxi,~[PtXo;NBo2DYeo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

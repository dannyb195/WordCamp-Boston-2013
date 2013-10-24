<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpboston-2013');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', '');


/** MySQL hostname */
define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ' **!]V+CF~t;]yX::&a ?[L$2D`]DHE6N7i9Q}^K4sV4`Cit#$tkI-!=Uk*+|E6D');

define('SECURE_AUTH_KEY',  'zxK,+|DX!CMvJ^ H`-QAJ8LP{}+^/Tm4|*Kzk,3g[6 3do~cp*vg%n#yWTZ=uW +');

define('LOGGED_IN_KEY',    '4 AbL s,RuY tn-QTJF]VAP_2),,+TjloWwSA2!#8pa3(N5I/U-pBK,eg#X6%$G!');

define('NONCE_KEY',        '21f1e[p$7+-p]:_byAr-euD*-04@PeOGy T;PwrLqH-Kfx6f>6b[W)TIS9_?o6&J');

define('AUTH_SALT',        'ersE#60/|34g01(tUNY.lTV*?@ifvG[LyvfeRvOYI]oRBM4U#a-f(]|H+w7+!s*b');

define('SECURE_AUTH_SALT', '0,im>$/qCx-s<||(9Z>}9XV>9diWnXDLbE.+iH]9[4HJR^`Hu%@qsB+XVMVhrs!D');

define('LOGGED_IN_SALT',   '!/En`0(s?)g-3a(uP}Oza HdNyNFv$L&BcsfoMkS 1=-kfvnTdC]%V|Lb@EUtrE/');

define('NONCE_SALT',       'Xir|;+~gj%L`hM@-[uHne^!cOoG-F2/29>lNmmTyc0~Dqy-{@[EkfJ*7,izm~k)P');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

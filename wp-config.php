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
define('DB_NAME', 'darenie');

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
define('AUTH_KEY',         'fmDEs*RW#1w}s%3Rw_o<{KXoGf!|aE:4.v-q}Zl$|@&vL{/TWJ)oETlzWAIQMf:0');
define('SECURE_AUTH_KEY',  'KvJO!k$tCKX.vr;;cyR4P,*Ll]4X4Tfr+KtkQ ]qR7&kV0kLFJ-2mxav+vU^[-}[');
define('LOGGED_IN_KEY',    'yyhOC8@mgh]X g+*{WW7%)|he-,mVY+r<;efgg.zV}]KdDb]2!)d|dFlcsJz;$/$');
define('NONCE_KEY',        'hw)!G5|a@~0Z.}97+Wf&3 v%wtGJa-S6Y!oCX C=El)=1)3~s|3/S1^-AnlG%3d(');
define('AUTH_SALT',        '*j=mrHpk+FJZPLPnmK2Eq%jaB.Z!_wSKfTL!zc}3u=5m`&(8.o/O0RVPdR,yH<@8');
define('SECURE_AUTH_SALT', '=a}vN*iO,E9qIGm9/:C2;EK;blmO<&o0YH^ya1m%j(DgEP=-+_)D<H5T&.Fg8DUN');
define('LOGGED_IN_SALT',   'i3EF?=|%t{^`6{*;^OjpS4x5dLWG,([wL%?`~||CfIb8m8|Q)sY&fkYF/b0$qz!a');
define('NONCE_SALT',       'Np6|Hv_G(l7a1[xPT8]nc[W|2P>GwI!(=OC?h!-{ZU^0j_~%!t!N]~EG>,N*++]6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'da_';

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

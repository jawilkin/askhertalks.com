<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'askhertalks');

/** MySQL database username */
define('DB_USER', 'askhertalks_user');

/** MySQL database password */
define('DB_PASSWORD', '260spadina');

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
define('AUTH_KEY',         '?2;+4]%#U;a]Kl*+pP3-]&}f!*rml?poe*o_CjtP1EZaPXGYy.K;:z0Bg#O1Q%_3');
define('SECURE_AUTH_KEY',  '$V5PcM[%O~aZz1Sa+<7%F|0|7|6HkMH4X089f?5BASZI)Ob=|_-?n+WAjhydPSE5');
define('LOGGED_IN_KEY',    '9xc$!VjcQbnCV;|6GNb_P_=(b@;<B*|7Ej`Plti.RbGa&9BXJ|3|D.@g:,0njoyh');
define('NONCE_KEY',        'e(W2H<9OR}7q,Q*91OuE`VptFCpwKp]hUnX{Mf$+-}[0#L)#}1O)k1*)!;1y2s|s');
define('AUTH_SALT',        '1,b7^-pa$l]hw~roaY iv_NjD-`}+T/5suKX(puS6dmg1<6tvSAa2#5/DH!=ZhbK');
define('SECURE_AUTH_SALT', 'Q[{-N*P6&)iuVavCA n[P>V}z] -?bNVQ#AA)<k<q&tn*Y-{t=mEM_uI$GUD+Gex');
define('LOGGED_IN_SALT',   'Jw8  )vd<,y@mu!~^7mPW$MX/u$L#aZ+K- BNrp}Oro4e~<@0@.lbu^G#Qqz !Gg');
define('NONCE_SALT',       'TR|%gQWbldUGE%cR1o:^Q#JKdl)L*|M!<%E$#oq+hq|b{+eO7~.Ere>FM}KYAGr-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

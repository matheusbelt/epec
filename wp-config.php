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
define('DB_NAME', 'EPEC');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'N-PTA)h;rDKFdg1q$9KjP#R=kC2PGh:=3Ie($hfn%>ZZqC=qOk/9G<(}&rpJt cl');
define('SECURE_AUTH_KEY',  '=3Q:<u1liZqk0tw00a`I1.8,U_Lj= 8z&W;==!MQ=TL+:)J[YX^#|+bSZD(U7&o[');
define('LOGGED_IN_KEY',    'Y0k`@+>19<k]?ne%u4_c&yhr#N$/)QHuDkW1@;<vQ5m^U<R%44?_AtrhG0N%t1L:');
define('NONCE_KEY',        'eXw~>_!SX8,C!%NJVjh>N2Vpxw(jUO:XP|D;vcvAvNl?0]ayTX9H_yuDN@$sI0{;');
define('AUTH_SALT',        '0@cBT!VU}(t4^f|0; B1t#E1=6R )X=u&(iYd(?#`1b$28^Ya0tEc8>z.BZuh-:/');
define('SECURE_AUTH_SALT', 'N(BHG+re2)01-nG}1>GC4__A>Snz6 gaqnXB-H _r%A{=QS< A/~B{uF*zwt{[6d');
define('LOGGED_IN_SALT',   'X:`{+E+@n!Wl Z4{GUCIbJ5f0AzKH7u85ix:!VQhjc|b|<Wt&#1FnzF;CziLkJ`5');
define('NONCE_SALT',       '1f3F**Jd]b<8L/{,~d?!C_v%KJz?bbAUsJE*v3gmRPsZhpPWQF!]JgJePd1!6IdK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'pks-new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'iddqd');

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
define('AUTH_KEY',         'Ek:l^I:7cFo}h]-UU2kI!KJd+|+<O+=-ajXBR-,1q:M_6l;Zi;I3mowE^2Z!9/>h');
define('SECURE_AUTH_KEY',  '%>mrKwNa*Wh[fz0&Yb<(`R3#9~}*{lYIKf|)HijkTV;oO:%cna>lw%>L-mhzHNo_');
define('LOGGED_IN_KEY',    'ij@ygc)Nm7bBi(:W19G#8CMDc,wyN}o,]X1pFvQ3>%vf4h`-_.B:ZZNs0~~}gY3W');
define('NONCE_KEY',        ')BA%A3k;1E%MuVTeT8_f`E~B(RNQaIyfXl+&0qPD{!cw<lME0POm hMj{i6L-rX-');
define('AUTH_SALT',        'bXig&tf4Eqr;:@+jt&s.x)V~=9@SqL$!R{q+]bz?E=RdQ(pI#@!fuYkyIqwd?86y');
define('SECURE_AUTH_SALT', '1Q|>{+C9 #tnFmQ#+%Zu*D+-dh)?8=c9`CL&qqjxcMv~P&=K3(!n69T1a~;D2}]-');
define('LOGGED_IN_SALT',   'm+O-(8.JO5Z.ny~ZG@+oF=se2-lMA^L~3FG|w&Q5$v|QfLC)b O~6k1Aeqd~1h1l');
define('NONCE_SALT',       '4@O8mE)m5cq-s<|hE.7U& }.~w|H8nC,|kuL{c--`y*J*1V@-wMQGy~9fDzw!=9S');

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


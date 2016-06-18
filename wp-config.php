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
define('DB_NAME', 'vicky');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'B,JMX6XxE|s-hoki5@+v`YL0435No g-bS+[N/@e`Atr8u5CPM$=2:U>e-Q&3ZUd');
define('SECURE_AUTH_KEY',  ';bE~^Rb)>SU];Ge7bIGVbo))d8t:/K;W%I):>oMN8((Ti*_o<e202KmE$H4`I|WE');
define('LOGGED_IN_KEY',    '+n6.`|g[+){TBoPi+dQXiUFnA]T%v[=2;Xx4B #SqO&4CRH!TUo?hf<Xn-[$B h)');
define('NONCE_KEY',        'xw:I, Q#<Oefm[LW8t%L2|IV7p7+>ZuJ&e-9K@l,k cfxuqTfbxYZy,W6k}-<MoX');
define('AUTH_SALT',        '75p`;%E>w *Z)Q v[Z7bq_z:8Q89o9mFBJtS;bj{nA9<?Ml!9a3+rk}-sLAm?7-c');
define('SECURE_AUTH_SALT', 'VebZ}]|[f5 $:EFU7%Y7/.fn_7o|fLgvyj|s(uv=DOHn-&|,oof<eoRl>,|Kh%-q');
define('LOGGED_IN_SALT',   '66KR%*J&y10;(5hkh`x6Ra-jWLT?5:PAL@m}E`A5yN ^N95SHqnKm@e:w<axilF3');
define('NONCE_SALT',       'O3:8h<%b2c5GjC.zP2k9Mes6!t?5[8|Rw!QHxAR%}TE2:>0;K+L3PvnBou*Xzc=d');

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

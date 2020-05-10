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
define('DB_NAME', 'fabritech_db');

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
define('AUTH_KEY',         '6}Y#gFRbCa!$S< 0,hmiQ5$e;0N94d>@@.SCUie$Hb<)7dc(]~x+ nt@6sq9bxej');
define('SECURE_AUTH_KEY',  'V ./9i$*!fdjuU%%u^4>|?#qt77@KzQVqvM*p00pT)>ZQQJJ-A@D2k5|t`clx{oz');
define('LOGGED_IN_KEY',    '(9^7@FF;axLa~v!Qm)*!K<onq.>eZ(nu^yd>j8#gxkt,`UV$;z,!f-%fa+ @BV9$');
define('NONCE_KEY',        '/m%-X@Ks4sa8>-$?4ZIv%2#hI1Pja!6wEp)~^57a1-lA_-||]xwfbf hL%&LZc+,');
define('AUTH_SALT',        '(qh0,W.y6v*2T>UnZS|@~ bx}T$/)L.v+2c(0,H(]<R53OiPFa&#67^xg0ro<o!)');
define('SECURE_AUTH_SALT', 't/`:GRInEh>jBXw4`8)5IUABFP%w>qg3D<V@Dek!y!g3Sr~!&u.!C!eof+m8cYro');
define('LOGGED_IN_SALT',   'Oq(*_WZY@Ht)49H#RfYcT/_`tx6bmE)rI{qJUAb$|0rsz5n-MiWvpQI[AJ@]LD]P');
define('NONCE_SALT',       'JS)#BE$OGL,s*>a0%50cef1u!;bNb`$pQ2xJKspac7nO+o&4n2w5_a/a;DS*gi!r');

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

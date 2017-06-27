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
define('DB_NAME', 'aroalvarez');

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
define('AUTH_KEY',         'lZ0;0B#g:9TSSgm90Tgy16DOlQj$+TyFy%j7y<+IM{>s yeQTwd5C),;&Gab3/H_');
define('SECURE_AUTH_KEY',  ',I@p(Idp,*Ly]}#kn$uKj.(T])eT;CsR@yx}^nFnKRaKsgtS/AD7znA~Fd302Lm:');
define('LOGGED_IN_KEY',    '3v=%DE/M4aHHCMpX,^WlUU@{kt@{q` _LGPx,zEM/B64cG7_{Rey[<j<2&/ocJx@');
define('NONCE_KEY',        '9Q18LrL0.5$/6`zwc]s]v(: :.0{,_Q}by{H/J;Walkz`ea{&LceZgCM_`2Qdqzv');
define('AUTH_SALT',        '?(w)n3a[LU@q^1GWj5<Zi0V)j{/AP9.DqU?7o:QS);Rri$;2~P5C(uTWE)g*;1cE');
define('SECURE_AUTH_SALT', '_qTZ>A)+L WT8Qp,Q.YVSZ?r<7^O[)-VtqrBs5>; <)`]yhSWp5O=!8=k 1mYO*{');
define('LOGGED_IN_SALT',   '[C.PwUCoicxucPg_pL~7aD/GqsngwrC^Iv=MuJ%`sgti}{ysfz|bD;R>pVQsAW|[');
define('NONCE_SALT',       '(CcxU`?va+Of*dakC+O3 Lo9Hp@n8%s$65|)-MOqG{RgpQ9Hmw$TE9r;]qQ{N~$0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aa_';

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

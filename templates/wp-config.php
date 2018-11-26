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
define('DB_NAME', '{{database}}');

/** MySQL database username */
define('DB_USER', '{{database_user}}');

/** MySQL database password */
define('DB_PASSWORD', '{{database_password}}');

/** MySQL hostname */
define('DB_HOST', '{{database_host}}');

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
define('AUTH_KEY',         '5i7l~u&sQLlG}`:J?,e;AS&dg.P9h|}>|7w*(&(/u>0{L)Kc8hw,)Hu?ix-l9lnf');
define('SECURE_AUTH_KEY',  '~1k-()1q)F(dOwZYB18VjdE^tM7IMh9k3@./6nyc}jd=b1I/;t.GIdy!g{+veC&y');
define('LOGGED_IN_KEY',    '(3Z 0NTDFp/eZ2N&*4{u&M|lvXvGlbO_VZP_t}+;K;x7^-LSGmmwz14Ar;l5oaKF');
define('NONCE_KEY',        'J#nqm+}|II5`r+JF-A9o~7o09hyQB&Vj1RC*4?)w{M~p9)N&%&]s2|QjjwDXT%>-');
define('AUTH_SALT',        '?sqV)0&+_{CV(.F9<k,oZY@1lb5)~ D.MSw_@&m2L!%)mxShCyk7TL_ux>[,#hKg');
define('SECURE_AUTH_SALT', '@5|7:@=a~[:;S#NTcr8A=TPPsU.ikeB#^),sbio]HI{JB5QO9+YTV6TZ`pZn?q_w');
define('LOGGED_IN_SALT',   ';bw8;c7V4#~lI-ExBe<7^3]*BPRBLfo0zwFuO]_C-M]!ZO@0!E.C$XtrlPG!mqxV');
define('NONCE_SALT',       '[pltzN`Sk#=cL(L,m!fPv8,0 *  iOx%_WWn!qTb:a9 +jiybtXnV0LO-TGSCf`>');

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

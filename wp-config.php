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
define('DB_NAME', 'rewiire_tee');

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
define('AUTH_KEY',         ',pU^EFz0@BV5Jl56k6Hh<E~=2 A4dC&OFj{3swD%$<m{9BI^bmMZ*U3eI{UA)vRr');
define('SECURE_AUTH_KEY',  'ykIcQxjJGLawooG,=&Yn=AJ905fc,pxk=E<Gxqlt>G4&U9GG<4a4(=|$st;/4D!+');
define('LOGGED_IN_KEY',    'YZ`RF%bs4u+S<=>%Nya+c?uUY)PqN@V1Py`KO|Nt59Pbk c;$g2N9paZ@ANe7L+x');
define('NONCE_KEY',        '%J&PhxCLCGd_=U4I1EXNsYmY$YD9TZ]8R*ULdWZ$#|A.w#D7ip}GSmS/2g6(eJ_3');
define('AUTH_SALT',        '7iH n#nl&~5s,79q^naAbjJK>W=$D]B<GY;/h%yOlBV:G-8lPpYX]J b!I^9GVu4');
define('SECURE_AUTH_SALT', 'bw>R[CFN3`@(h%o5/xxCm@F?A7Z_^JN4OXq]K3Q67:8Zb8?nj8iz[7[!za!]!gUL');
define('LOGGED_IN_SALT',   'Hw[{`4=DgR2I*n:xYlTw+M8csc:!WV.7;@0E)G~h3Jw,`-v^IvXj*Bu52Dm^#a4A');
define('NONCE_SALT',       '.`NP.qLmf^D;Z(A7cC6j>QJJt.m/_W/.o$yW4T37[=k=0@M1-V?%Y*)x:v^^hXE?');

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

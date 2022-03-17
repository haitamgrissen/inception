<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv("_DB_NAME") );

/** Database username */
define( 'DB_USER', getenv("_DB_USER") );

/** Database password */
define( 'DB_PASSWORD', getenv("_DB_PASSWORD") );

/** Database hostname */
define( 'DB_HOST', getenv("_DB_HOST") );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'YACkhZc&j28ECok+(vZP#u_$tHG6 BBT`f;c&CXS}V<e+)Kl)NzN|)Y}< _S[fu!');
define('SECURE_AUTH_KEY',  '>L1zU>!m?J.!%$]sw)]/Xo!LT6Na4OF#4^s Bh h1Q;zP-Ki#w8_BZ|vT?F|~_+f');
define('LOGGED_IN_KEY',    'R[(w,^ML!wuzsh*lA[;,7h-_|P.lZ:I;eM(x]e^JJ%`|BmBMB5C&}.1XA#}S`6%6');
define('NONCE_KEY',        '762;snr?,RrIdrGp0Xv4+w_&gEo}c>+jqC-!Qn(%x<Zwz.s.<,#IxwH9<*H>,qZO');
define('AUTH_SALT',        'uZEn[<y+eV?;~Y*a`lZO+&=`wd1jXA-%od6|P|VAQL[=HXF_mHqA$wr^`]C;8B$d');
define('SECURE_AUTH_SALT', 'xLd.;]BD3(1zmbz7m}rsH&aV+/mu+Ns9C .$Z ;9Iu<9xqDRri_+[{#5oImbC%QR');
define('LOGGED_IN_SALT',   '/iF}h|g]VgT6T&Cwc_;:HT_0jO7Ej:?O3w:3~{Gt?}S^~(i?BY-5p*[b@ba+3R6]');
define('NONCE_SALT',       '3|^?(*q-}>V [L%Uu@{v4>esH6Dc8cHFZ+g=8ErtE=@4v>3*{VrvP|g>g9U`-|E5');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

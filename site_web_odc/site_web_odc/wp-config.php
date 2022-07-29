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
define( 'DB_NAME', 'site_web_odc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'B(M=Ije91=E<{Z%h8{a=NdSB09{dmOcFk57snJ+%AMS9CACjM[x21&Ce-xp<F@%`' );
define( 'SECURE_AUTH_KEY',  'GYnv>YT_2&,<I3VEhzn<B!{*W/lB5#3B3_Q(|%&O(|Pm_ k=>LlmG1y!-!K6:-oX' );
define( 'LOGGED_IN_KEY',    ';lfX_v[i!e^]|f][XHO&l(2D+/;,pf#?wV{1W(+3kA;U_j28O/.P9u`,^N<WxdfB' );
define( 'NONCE_KEY',        'sT8,D_EP1GJ(Ic*`wv24^};z$3{),d)=M[</lY9mAkn~U-hXnF-{8%k@~wJ1{>Rh' );
define( 'AUTH_SALT',        '.@mJc..@p7(Y9#AY;f=!]iqB|^CwVI19*QFf],TL&6=Q95tf!X&Rgg!#`(?*=NU`' );
define( 'SECURE_AUTH_SALT', 'L|PUg>`x[!lxD<:{/,T(uVV$D[8|@h7_MV=cU#I88+?yXe^.PaYa}!#sh/[sO}-8' );
define( 'LOGGED_IN_SALT',   'S)X}du+A#*L{|VVqF^M&8QeV3&)2^~arv8W}}SaDVZY`ggNT@/H8odGI3tbOuP3^' );
define( 'NONCE_SALT',       'ckO@[H[m!?Q9;~`g9^vb;pR-oMYuHN7tF-QUvPg}N8duq+A:P$sjwU4448r^gibo' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

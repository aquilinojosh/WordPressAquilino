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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aquilinodb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EV#c6em%?4-II!}_NXkie{`=h_x.qZKwkJ/H{yySRf(a*,44M|b0lR$j.B3hvXbe' );
define( 'SECURE_AUTH_KEY',  '>w1c)*Z6z64oV)S1Av[b!TXp!t#Br~r,xz-wVit/%}]t0R?J5J--p{.tIvQ%5_w;' );
define( 'LOGGED_IN_KEY',    '.|0cVFn4j|Y4K=vi?>>k6xk4hD*=mpVDiWNA,5ww9>zA-~$|9{GTU$RH:0>gIJx<' );
define( 'NONCE_KEY',        '? x!`Vh*ImBaaP@$]Y$(4Oy*DT[.Q[bL GMZjEv6c}I :89P1lDKVjE:]g3nQh6I' );
define( 'AUTH_SALT',        'Sg}SG.rh=,bPhN3,2$XZXA9<@qXP:WVLh*U]OQQ:Qto/xbf.#pJ=4A:Sd1>$RVH^' );
define( 'SECURE_AUTH_SALT', 'yWnv(p]5^n]$s(#zWlxu}~lQIKl4)|yNQhBhX&e`Qf#nnB9;BErEPp]*qO1{XTbh' );
define( 'LOGGED_IN_SALT',   'Tmn7H$42^)_2dpigD$nUeR,9ne6KTwbO8Jl~OGGUcJy-qrVH4Im}`|[Xu rPF~UW' );
define( 'NONCE_SALT',       'Sk]%CxsVGEA<C7 IEm-inD;>_h];>h/dSphks]w8pPd x4W$[pWs%BZwg(-^GGMD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

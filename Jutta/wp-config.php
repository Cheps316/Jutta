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
define( 'DB_NAME', 'jutta' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'wU*hb{Hg*r*Uk{uZH2:=@tB>>(qk+>4:i.Mc&wn+{VOwZ^7C`%?-cVDu:B.3vDln' );
define( 'SECURE_AUTH_KEY',  'og/*k:`DB`1j!s-GlAI?cB4p*U}3kUK7}]xV4BrX>uq|5D*o8)[c~f:J%-_#0NN^' );
define( 'LOGGED_IN_KEY',    '$:JF6WDm# i{E=Hz5?:MC){Y4W_{&oO>M-Xxy5bKUZPc`f8c<uw(NOW?P(@BVw<N' );
define( 'NONCE_KEY',        '}0}F:(8vm3F|S2>$f?+nG{&+J^U.#qOICTBc-++(#EOnaVc(mv-&)OA[+F^ql:?a' );
define( 'AUTH_SALT',        'DZx]Fe=)v%=|ccy8&<2(tJ5Es:3JTV Pps@d3jYZHCU0HV|(pq)cl$V$R01dG/9t' );
define( 'SECURE_AUTH_SALT', 'UZg/}y<Gh`yOATnqRbjV;!S#}G?Zzk_yc5a_-}]T`+$4,fl>JIeGj+7Zr0PKMvwz' );
define( 'LOGGED_IN_SALT',   '4r1;&]x]adccenavnq!$ qBcL[@l%O$BowBvMq`&r9%NdHd,uE#tAIF0sJW+S>5a' );
define( 'NONCE_SALT',       'nI|aU~4HB}Z#ck]Q]lWx9zLYYoFT | kRu0tYwY2eS48~~u)qS#T{N@/8+Vs*|OE' );

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

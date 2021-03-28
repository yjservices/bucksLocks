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
define( 'DB_NAME', 'root_buckslocks_test' );

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
define( 'AUTH_KEY',         'C)re5G@>[g},l;,#t&;X8B34*Vy[@fkr|#%df2_|n_rw<Gv+:_B3f-sj_t0 Ub}^' );
define( 'SECURE_AUTH_KEY',  'eyBX@Y,!)@qf9CZ.+uxxg6r9`D;8chaXQlM:WZ[Vi$=L 2QcLmR2iG$%Uc$i3$=`' );
define( 'LOGGED_IN_KEY',    'Md0*F0el&LO#b#?$Ap:qmUK.[-jBlwoY5RD.y/*]L#Htfg?A{~w]SSy=Xy;&PAK}' );
define( 'NONCE_KEY',        'Zt+&je +_}?vs&/K{JJ~S5,*2v`k!g#Slkb ]l-s`XvAA5]72`Rsg$YJ{HM!8$Rc' );
define( 'AUTH_SALT',        'PR#>}p@/S^hQY-T^f)?.74z4FAG`_4U[c`vK+%}[r&tBpFuf5r]`z&ChGT70RpPR' );
define( 'SECURE_AUTH_SALT', 'gLy3{m0>vMuxnyK`YH}T@^4`hb+?fSSwzEt`dZ;gP&c4GK]lp_)f#X-Up;}_=>$R' );
define( 'LOGGED_IN_SALT',   '@c2y+k1skuBb_tr!V;w?u7<2B}+D;N87{m/_[p5xI#,My9]luNm[2FH{w-IFB|la' );
define( 'NONCE_SALT',       'R~oPu#7|HO+q;&2Am/$En4%L%?+1~TL7atc=.^09.K!eO7l1h%op.z/GX-`]pvOG' );

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


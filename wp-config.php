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
define( 'DB_NAME', 'template-site' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         '5.57zcj`Qr|>QDktej>Z|$[@K/Ts48+[#v_}~mTX73G|S+H{b>9-DMl)lc6.oN.-' );
define( 'SECURE_AUTH_KEY',  'D)/K*d#-7PiRb`NK]Ee<7-?0P$)ZKtXR8(b_^3VOv|*sDFVh@%<q(MqSZKqY5<D7' );
define( 'LOGGED_IN_KEY',    '$nW_$Ll*Moe_Gqx}mKt>gT2v-*vT6(C8_|fNlG$4Z1dc:r4T)4`eP!?idVRSGW~(' );
define( 'NONCE_KEY',        'py3CDh(xW^bMI@Oy74Wb7rq[(LxqsPgj.C[KIaN]T7Ptf1lLK9Anymf !]t]V(`f' );
define( 'AUTH_SALT',        ';Zz+&6x&nU:s%Suu2^IMYyYYv[5}t#A0F6OkFeTeA0DfrYaPiIVUJTe(wH(=3Giq' );
define( 'SECURE_AUTH_SALT', 'Iy)yfK^{EChWk+s@yL~$xYV@vVJIfW3:HS#FEtB0Ov~jXaYE5Rl.}FU?K#voChqt' );
define( 'LOGGED_IN_SALT',   'msB_4%yQ]{LVGOl6<rg[NUB%#F4H}rpX1?/LxD>]PTBCXPo1E,d{2_1f}kDdT_lW' );
define( 'NONCE_SALT',       '&&x+9n4iz64ziGc1#J4qi>ZC92qVIZGac7gPAfYV=zvz;>aq-K>/hm1#l^ZXKbW!' );

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

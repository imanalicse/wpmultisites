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
define( 'DB_NAME', 'wpmultisites' );

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
define( 'AUTH_KEY',         'i=osQ2jP;7Eb{cO/.ceX4ix]7H(L?70CHL,<9o+6t~hT=Sm>o!){5nh4%Xb!d>JS' );
define( 'SECURE_AUTH_KEY',  'PkP0_,>]$.k~|+3EVy~cfq8euBF/b.@Bh/*o8e?#EiDY>?Ud3?bFTnyeANrudV`v' );
define( 'LOGGED_IN_KEY',    'cor:$+,urxi_Dg?Z/X5g1cKVi!eo.0LMJ!pHcC(BKePc4rqU>GP9?h<z1aHe+gN3' );
define( 'NONCE_KEY',        't[dtP8QaRBbz#9Nodm<jxfpx19J&oA@T`Z$z(@(F7 AEdi`n[VD/KRG^2n_EcJzl' );
define( 'AUTH_SALT',        'XTT85$?v.3OJ1XiRn:rJCD|p}8V6{(pY F0zr{y{#Q Z^0W0q,4V-0hLUXg:x=U7' );
define( 'SECURE_AUTH_SALT', ')]mIH9#B@u9_$z6:~rpRBGl] mIZ.zP`5$$C^@MK:&]538*LRSCivN+dn*%#!14N' );
define( 'LOGGED_IN_SALT',   'c|>+_d3C9xo1gdP+P/kn$W^rUJ<H%NC*flr!z6R5=bO+Jp^~e&/+)71BPR;HMSSA' );
define( 'NONCE_SALT',       'zwBW0J.C5W]D#WL8i,BKY4*?Y2+^7_S>Fl9O15]]H20e>O<!iNLh(=*YdJ{U`YE`' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

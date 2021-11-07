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
define( 'DB_NAME', 'db_demowordpress' );

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
define( 'AUTH_KEY',         'mg@^ni3/9X<EJ+2[pY?=$~MiP`!KJ%euCJ.S,N5/XhgI58L^=?:yD.&0|=EVnT;h' );
define( 'SECURE_AUTH_KEY',  '1T%g|5NIrr`$&[W!Km;Xv,lBqN>rwL!*2^[x;xQ1%AkBl*Z{Ij~{W^}9=YW$g_M?' );
define( 'LOGGED_IN_KEY',    '6_i%`F:Y}[GGgRb%3wx=!L0c6r0`K?CcOb.)ZZ c3t~RYb9&TDZvC:n<#xK7=.s8' );
define( 'NONCE_KEY',        '43;k1%5:fTL@>{d6RSo#dOu0_S}*?y|3sR4{9?w`=Ls*POPanop,Hbh61kVm2$M9' );
define( 'AUTH_SALT',        '.rLlO]/tY2R]V(kp!]! J|w33Y!Dud&>y->03HDI*30iP;d]<#TqFyWs,?<pKG%~' );
define( 'SECURE_AUTH_SALT', 'hq!j=Siu`~p@lYXY?8qgPI0D`@})Fsu$-ZNGuwI|dCT<XAb%x7^I7Nqn?(FiIu2J' );
define( 'LOGGED_IN_SALT',   '1O2NOq?j3wUk.{}CPy}sv!ta6msRea}np-O?80GC1f,up.Rd6l}8/WE&7stc6Ky6' );
define( 'NONCE_SALT',       'WNwD2Zg?7.PyMXp a<|ESFnvJ4P ;sM^b]/W5#uDdj}]_S-TM!9z<Hl^Lcs9~l3u' );

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

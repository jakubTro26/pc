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
define( 'DB_NAME', 'smakolyk_wp8' );

/** Database username */
define( 'DB_USER', 'smakolyk_kuba' );

/** Database password */
define( 'DB_PASSWORD', 'Kubalka15#' );

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
define( 'AUTH_KEY',         'N@,?1s.Z4W3l|9A_edb!DkKrC_Ukax5[%m> [kz2:P9,*R}Kdk.Ct+&I?nzppyg/' );
define( 'SECURE_AUTH_KEY',  '`]Q0x[s:5DRPEOEAJ-8fZ}hzap.bes8|l_;f^c@ahr?7O/&b20f yPq>&+$zdy)C' );
define( 'LOGGED_IN_KEY',    'k[#?2YvXnSlx7w}0W14h*Oc49:w5YZt-!-6]?*h-H$!zH Dr~2INj. #$UfO2`;a' );
define( 'NONCE_KEY',        'm~o0e5H5H=Ux7k7q6Gz6=JZ99v>hUc(aS]]fl2DI[o_B{mvEpE-,#^SY`4$0e#X+' );
define( 'AUTH_SALT',        '4f-k?iML(UruHA8SJ0y+5V){KHRC9t<FLmdQwLMP@58A}DD!7#X+/Q*N$}HPENcH' );
define( 'SECURE_AUTH_SALT', 'Z12z>cuNDDi-Sq4E4<C^VHZh!jN5]Oa.6m2 >m{X0T)#_(*SjNS*y0=LO$Lw;>m{' );
define( 'LOGGED_IN_SALT',   '54;vb0&6](Y)6p#[8hfTBMceqZLgg6E1Tblx _cx -KBH4tF]``cMxS#]:hwm&3x' );
define( 'NONCE_SALT',       ']hNJhfaw<~7T[;TG!~+J9|@s-]wjS>%;t#9 {T`B}NAtOD2$3{%!SV-=$R%CK(Bb' );

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

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'acswebsite' );

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
define( 'AUTH_KEY',         'QPfpMS42;5ME}kTuq_qO+i7>qLjOG}q.K1DoV8J9`HIN)agu*=!bJpEFd6va|NJ=' );
define( 'SECURE_AUTH_KEY',  'aQf:-_C5J,_T9j|e5O-[gL8|TOof6Pxcqe2#/`I9CrFtheK`{E2eU)oge:H:nLcG' );
define( 'LOGGED_IN_KEY',    'k~Qm1!1@~m7n/<-!?e8pF%t9#TA4|9P@HcN`}lgmm0/NygtTqb|}E0T%#d{.%>YC' );
define( 'NONCE_KEY',        'o,{4MSWBj3gA&6fXC??JcT[Vjzm5-4olh/;0uc-EyacL=][qg/#H#M%rBp:45sq@' );
define( 'AUTH_SALT',        ']1cNMVT2<J8Ims9,@C8@LeCB~wOT[yur5&B%{ 6})([!7Af{7`%XMu5LW2&Fq2]C' );
define( 'SECURE_AUTH_SALT', 'dA=~bc)N<Jj1Mi@M~/3SG97 xz$k$^SxN=|^QT78uHU(7&j?)euv(wKe_N7@]A]8' );
define( 'LOGGED_IN_SALT',   ':fpeSI`#,e!wBIW${y_ 5LiNQC&:ILgVCE*~!i^$9^?<rk:BjVIjhL7rIl D>xk1' );
define( 'NONCE_SALT',       'hUJb X-={j; OvY^?^wpP6v &wE.?syxcM$i88YKh=<}nh~+=q*d(1drg3:%[1)%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'acs_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

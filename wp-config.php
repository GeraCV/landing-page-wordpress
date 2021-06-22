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
define( 'DB_NAME', 'landing_p' );

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
define( 'AUTH_KEY',         'U~b{r#VAD>8nj$6@kO:DO6g+v-(6=rML/6me658Wup-`D{>2!Zpl#;@U:fX{8I;*' );
define( 'SECURE_AUTH_KEY',  'GY;:h,..y@O5v<3?x.m>f<dv4d_4y^]S7`J>{FrXwy@`Jq6/QF_vp_5I!9z1`lvf' );
define( 'LOGGED_IN_KEY',    'm0sv9I0yc.hE9)[FzYA#gC|>h~!?DHte+*wr%:St}]->aQ~95pJqrZ@/,cTPB.Ha' );
define( 'NONCE_KEY',        'e5vQ>D7W4P!+hE3Cbk)V b:4PbYs88Z1z><A|7BC^rA=qsJFYsUqhYggR.}yQZGg' );
define( 'AUTH_SALT',        '2z);{j>G0rWgV:dwur$),Su.WuyYj#RYT4Lh%K%_VoY{EzEE>YEE)1<bO6!H:Xo&' );
define( 'SECURE_AUTH_SALT', 'C>EaYYG~8PUi,>M@&=~4x[:Ol2nv>3]8<hRsXKk [QUfXEh+jszZ]A[-F-*cxc7a' );
define( 'LOGGED_IN_SALT',   ',<jx:`Dl!#,$zVk!X%{HkvB).9_<FsoB,p^CU=VtUF51*VDZJgbna2w#X*6%V.6%' );
define( 'NONCE_SALT',       ';->6vV|SX`>2Hps0AR4@K9,?OJEnF8]Af[+?^$>|M7@v`+g%ll<6ARb:$Ox:XOZ?' );

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

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
define( 'DB_NAME', 'hiboost' );

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
define( 'AUTH_KEY',         'RohB&kc;}m%LwI7c`T&/GxD3M!].I!AA75<[7bib_#3E_MqhUl~Os<uQJuZ,_OGD' );
define( 'SECURE_AUTH_KEY',  '}3REXv(uaV1yxq}u%L.W3#Xy8YnrZkV:G]MC2!=6vQk)Ze}Wx3p3Eb^kmaQ{WQ=f' );
define( 'LOGGED_IN_KEY',    'zm`P|6HxWzFZ(IsQMgs_7$=E3O6Cdz gxYv4-[IA-<N:V)_O>}:1sT*`6/=N.T:c' );
define( 'NONCE_KEY',        'Inhsa)S|G!GO-[N:^:H9&m(o%!O^3-/Sf@7Y$}av2<whTfic<}AsaBri3Yr2ug-^' );
define( 'AUTH_SALT',        '#CAJRf9/LXr.u.%3B>$[V)JgHwd2N}/GFqw9Hqru&Y*7e^4yD$%X H),=c5{mB6Y' );
define( 'SECURE_AUTH_SALT', 'Wru3[(ra9{N=jL<IWM/Run[]ZdQwC/D)4aa&QzMXXv{ynJuuVTK&f4: 4Bp7Z*dY' );
define( 'LOGGED_IN_SALT',   'rQPzJ$Oay1#;!-W]s3HI=*8(01|xStd}oWe!FD4!Xc-,W,{=H6J9kl@<>7:$ &uP' );
define( 'NONCE_SALT',       '>oJl&]I:?GdNnrT1Xo6&Ig}6?@USYrm>r!9!ZMD|~,-7tX;E*^XU7YY2v`eE3qT5' );

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

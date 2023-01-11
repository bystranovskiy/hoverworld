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
define( 'DB_NAME', 'hoverworld' );

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
define( 'AUTH_KEY',         '>M9(f)OB#V#K?hy NQU6)bO0$6UM_}n/+)pUE;D~_<LY@v8nJ,$>z,Y2Ci~u| Re' );
define( 'SECURE_AUTH_KEY',  'b5+_o3/w*%dd57wQBCyJ&mA0*1842+1W?#g{hHQlG[8K{9ZKH,fyTIHR>v(1)IrI' );
define( 'LOGGED_IN_KEY',    'Bfolfq$t%_NB?hE6>-@D$z;BTlaTi@g|4L68x[PWA<+B[`FH%,Q1L<k|2l+i%bQ5' );
define( 'NONCE_KEY',        'uV:Fg{#M5_].wdqWK:--4cIdhVUrff%P@~Y6!F)SAP 3BhxgfOES]<F-;#$jb4k;' );
define( 'AUTH_SALT',        'oP1xA. Qj1[cP8!/D4/`U-bx!Gi=.2rgv5v>@eIE]9_4/#l_z|8|81Jo|0=M#74K' );
define( 'SECURE_AUTH_SALT', 'D3Y@lLYa]T;&^K;>xnM[bt-uW;c:b;SK$TJZVaI-TcuSLM<C=?kz/(As,FZLaASA' );
define( 'LOGGED_IN_SALT',   ':4#F8dCW1GyHs{kHlW?f3i;NJ&7w=)*Kv@wHm}V4L hbK9-#3`-`@h/$Tf1?ph7=' );
define( 'NONCE_SALT',       'GNSFEY`^eRIXb+,lY:]rizTBe~W(@vdrh/(l:9Jxe<0er-wUk~pePI(+cR`j)//?' );

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

define( 'WP_HOME', 'http://hoverworld.loc' );
define( 'WP_SITEURL', 'http://hoverworld.loc' );
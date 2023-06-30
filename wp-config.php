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
define( 'DB_NAME', 'sanieren' );

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
define( 'AUTH_KEY',         'r;woN!v0N!x$91vv|;SUlXCy3]*jf3bkLyOpFSUbg{~h|2oVxg~3[:0/id,1Vs/Q' );
define( 'SECURE_AUTH_KEY',  'HY`)5;9WHbC6J,qhrLJv-+awlQ9^M?qip]~L`{D5.<HPJ{oBfTUe]zRPGG)9}=5l' );
define( 'LOGGED_IN_KEY',    'x 937q+bN})r|qC8~FxndQp=3AEOUzdwmwD<qP/Ydn3%+%-{ZofnnIW%bJtWqX]T' );
define( 'NONCE_KEY',        '379t)^uWsbvZ>rE;UyHx* rC$:]{1%*<*F>iE- c[I_PSg!.1<$};.^t^.&-39Uz' );
define( 'AUTH_SALT',        ');/7b#u%7-,2Of!S6 DH9PqR2yP<DO!3aou?qD>r<A H?$0j8?tl>?rcrNynz0gf' );
define( 'SECURE_AUTH_SALT', 'wMU:QN:e255SLg!coi}.~REh_{k5V:TW!)}9kF&G5Z(%cQI4goOsLIyF.TR~bCB,' );
define( 'LOGGED_IN_SALT',   'pJ$0%8:)TW($jzc}-G&:n`!}#}h~GHR~a9FJf`POaBKHG-MyVU5Wcz_q8%`nfYHx' );
define( 'NONCE_SALT',       '-A<^+>hCL1hwWT`Nr^k*v>v!;=|a.LSMq H>3*`<^b)6i5$c9ZNW8__MI&=GhjW8' );

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

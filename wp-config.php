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
define( 'DB_NAME', 'partout0_lrg2' );

/** MySQL database username */
define( 'DB_USER', 'partout0_lrg2' );

/** MySQL database password */
define( 'DB_PASSWORD', '(&*X@npaP3sZ' );

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
define( 'AUTH_KEY',         '-zWM8FuB..hvJo_vVY=P>%qmmki>O[zUJ+7+b;5:ope}%:4Xv7VKm(W^D~/AF)V2' );
define( 'SECURE_AUTH_KEY',  '#FDmS7N]K4+U<2J[ZEK5)Z>`bj-,j4+Ez#i%p@F[r>HPmUAPt5f/!{o|)VZh~,X~' );
define( 'LOGGED_IN_KEY',    '7#PH^IhR-?VgZj6Ei1pU {gc}{qN`Ss8r]B#etwZ-D}oanq5+T@<xkID|po.)@XO' );
define( 'NONCE_KEY',        'eSWO}ay<eL=0jO]kh@l33pKV~#Oa2_Z0L}*nrT:t?-D8HW18jhYz&|WoHhh |a(c' );
define( 'AUTH_SALT',        '$H4axd6IVPo;sAnJt=;s-:RbBe>>4eGpE^esEn!]:=l=</-j*.HynY_zq#K7!.Zb' );
define( 'SECURE_AUTH_SALT', 'IRHyr<HYS,<ff.<<`fWi-KS|62NmpSDn0Gnh?>+JkOve2`Paslh&sP%ks?N2+O!+' );
define( 'LOGGED_IN_SALT',   '9 !^k~Z0p{EZDcmB;D2jNVicT*rT+`-U!bfeOcmmgRtn#CDJ4a5C)a0{a,~~hwDE' );
define( 'NONCE_SALT',       '^[&IQehE`3Y]^*9^pjXO|{?{daS8q6n?v86aKtqt,79v=sxZLdacy{D+0_,  Cz0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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

define('ALLOW_UNFILTERED_UPLOADS', true);
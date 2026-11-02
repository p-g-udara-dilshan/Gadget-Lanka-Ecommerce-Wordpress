<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GadgetLanka' );

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
define( 'AUTH_KEY',         '(@;_etvi$#G|_zzF*uV3C#mx.PA,N^m18$[4Hq*E9=gZ@P{4bC}.(A+[q+HA|v7e' );
define( 'SECURE_AUTH_KEY',  'pk3B>!N3m-xh2SE)<77)Z|?H4q+-XLcG@keMHIswGF]g:[ch8};?&TnVZWroG37x' );
define( 'LOGGED_IN_KEY',    '55V~c>v_>IMvnV9r%CcLrOfR]F;L9%nz+h.-|~#_0gc_XPasjjaV49)fuWUGR-#S' );
define( 'NONCE_KEY',        'g)q;YpCgz 3R/:RRkgE-7v+YBC^4|3T`:t$oB0!U1$DxiaaHQF_K|D(>-E#R8Y7D' );
define( 'AUTH_SALT',        '7L~IZg#aco@b<qq3EX@`+mX?kQ:xRDpcn0ds+B8XC=*|7Z64UoKn8l??l}__l2I!' );
define( 'SECURE_AUTH_SALT', 'wk7mL(BJx?!XzayuO}N^{I+y81r!7rg)Td06Y<I8:rBqZ{rUC7G6J3LB_3O)-*um' );
define( 'LOGGED_IN_SALT',   '?09$:cY?a2uZlpo+X/l`_%l*kjAA<;CK#k6vrXESN#{rKP=7+:BrtGC!8%:iJj,a' );
define( 'NONCE_SALT',       'gn:aeSFa)v,NA~TY^JUUF!QD#L>hJAQB+^mU.wsdzABa4r$rq=^jV7kb-J1E:mi{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

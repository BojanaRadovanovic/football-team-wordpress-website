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
define( 'DB_NAME', 'icr_baza_podataka' );

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
define( 'AUTH_KEY',         ',Ix3*/m`omElegSlU+{ ~[hY.WZR_;%F!Vcm;/D tK3d`!}h[ASxi%<V{Yj]9IrR' );
define( 'SECURE_AUTH_KEY',  'azG9mHi?(k6,[ry4Go;%Kd5cG?1QovQT+T#[Pj$QR(/&+a2WYApTfzq_dB?}dD.>' );
define( 'LOGGED_IN_KEY',    'Jl,q~?eD<zZRZMqkb%g=F}PPI*@w.C6k=YUl#09N/$(nJAoF-HZz!m8mPg>$^Rk0' );
define( 'NONCE_KEY',        '*U&dY</F@4KFWRr5_;xi@C[I?t)ofK+AaxMPUf9&D!Zf|kC+qT7}IcC0E!o<k:Ix' );
define( 'AUTH_SALT',        'HNa^F+vtGAj^hRdcq<&$Lz}2tsu}s?3eAxV3LW)`ik$0VcO~mbJr6Wzb1W9n0V#L' );
define( 'SECURE_AUTH_SALT', 'Qy:rCHB/tDH|qL =Z$M,NGaQa*?}=//:.>Fxr>}ie,lR:&|)P:5d}FM$?V?@>%Qw' );
define( 'LOGGED_IN_SALT',   '%lb-7cWO6iH`wsRt|LFl@c4ch(Lt#@.$4~0_^Cx9_:^_0s(@+?H):`L6Fk2D5 |E' );
define( 'NONCE_SALT',       'j9BDQ-_Yya%2>vif>)fhTqz/.bZ61]h9et|&bQA@[<dQUqajQ@zyf0O4{^~vX)n#' );

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

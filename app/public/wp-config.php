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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '0I||_ShT8k]I|B5sy{^vws8/cNc,x7aYvkb#xp7mW]>W5*p@.MQ<@(BT*P0xKj(,' );
define( 'SECURE_AUTH_KEY',   'dm6=VEAkVn:G6y}zTp,xp9iBXZ{`;_qp(AU7~;FQ8avkP~^i;n7z>ZgRLc/<`_Ly' );
define( 'LOGGED_IN_KEY',     'xt!KMB%}oW$kW2nBWaJ >EXaKDv]O0s|z@Hs<eVmnOGZh4g@w!_W?~{^@=#;^Edb' );
define( 'NONCE_KEY',         'tvV!I&L1y9c.YV0{zi+MT=WW.|FES84j+6`qeZ]2#GS,iRc{r/]&9`>G>|}]4Je1' );
define( 'AUTH_SALT',         'sKdh)[_tbDRCdrY@TAq5p?={Ym9r.w8x$s<vWY+1,4w/kB(~C@4uYGX61qO&bk1D' );
define( 'SECURE_AUTH_SALT',  'm$1h@#r7fSZIi-jJ( <<jO7T=MQ4t@6, ft~7wlySPsTBl uQJ]7eORVB30niCza' );
define( 'LOGGED_IN_SALT',    '>|`g^8-@/G0vE:Lvek84BADT,kUer4^APZd#hOVV2$>C@h&LK..+WfCqfB8|=WW*' );
define( 'NONCE_SALT',        '$ytfuOLW]^yCmM27!T.nfhwb7i_[06@J/6x(5{63Z+Iv<5NUXRo}qi4L{gQ)w=kj' );
define( 'WP_CACHE_KEY_SALT', 'ETyO#Pa^6vV4t9.a87xS{z]:z@UZg%i^wTh!>Y>% {Qg!:U&bpek9}1mA}Z1qoTc' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

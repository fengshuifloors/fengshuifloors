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
define( 'DB_NAME', 'fengshui_db' );

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
define( 'AUTH_KEY',         'jS~6su<I@}/BsM%HTT8tn7bph&z~+&GwqrEJ}uYIX[kdVpT4T*(U$:1]<w:m9mOf' );
define( 'SECURE_AUTH_KEY',  'I1lunB/h6`u>?d#wLMvRC&&/^s=1^D:Y/?>!]n}^+)IPTKT.CmRLr!`;zU/j9mH6' );
define( 'LOGGED_IN_KEY',    'zT6iu]5=5sEu8c60qIuE*c9AzpR#a|`98fRwwdL~ASVApM:#$HM.-=LsdG(K:pIu' );
define( 'NONCE_KEY',        '=tpInjM06TMGW7tHi|ZK*?7/l7[w:)q4:D9ln_|>2B3r-e+[!|57)J>P$Ll?m_d0' );
define( 'AUTH_SALT',        '`0;Q(owJSv[-7?},z?>/JX=(W;7rcIq76^IlEKoZ7803 DqX-eT,ukpHtR@Y[p Q' );
define( 'SECURE_AUTH_SALT', 's|x)ydQ.E$yQL{Fs~?hm,3ddHf6aw`4F6651:6;W2wpiu3|:*DVTn#hTZ<BVp.zO' );
define( 'LOGGED_IN_SALT',   'i*4;:-OhfMu,4:7e`U+%#OjuVcnE<#;$t{SVd2RuIi.qj{Kl~hW&wc:2e#qCSuu_' );
define( 'NONCE_SALT',       'jQDZs:eN*JQD&AG:~u.I:nAJ(h_2H8]|&C.$^K:sgk25Y=Y.@j[MzjR90>tSKy_P' );

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

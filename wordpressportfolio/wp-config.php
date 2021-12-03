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
define( 'DB_NAME', 'wordpressportfolio' );

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
define( 'AUTH_KEY',         '.~ruV>8<^vas4Q7p=J@UFTw4xEUPX,>KGQx,VM;k7q!{a/BC_lSVfcqcl*BhSDVe' );
define( 'SECURE_AUTH_KEY',  'QkAo8]HKQ>$=_LF>$SiYI~,sxzGq7D@?/4xEmLm): 9/Uz`|#A1Uc<@1eDM-xO[g' );
define( 'LOGGED_IN_KEY',    'h_oE(_f hv)EcaS,a0rD&zbSX#L9Y<BnFOp!#MX/<PM^Y|B]=2*A[2&1{0}=Ut)e' );
define( 'NONCE_KEY',        'C27a|{[Kyr75J- (6,0Ic~1CQ@E%hIgl@S4-:fTKg,d2s6v6(4U`bUWVsd_zd[P8' );
define( 'AUTH_SALT',        '$&%=-zLUp%6^~DWxL07plwzKcp&pXHqKW.&3!$5AulVl5~4=uInd9csDm QC$HV(' );
define( 'SECURE_AUTH_SALT', '1,WXBSz7DwLoj0eox_9#C1iWb#gfBx0T$@t2b1g]}RuC6--BF%}~taEMIZ 5mtT5' );
define( 'LOGGED_IN_SALT',   'Js9mfoQ_>BZk$4zmSO(.u5q|BLDsHfM`]U>J?0NDY)V*:f V2GD)zU1OXL]1jGVn' );
define( 'NONCE_SALT',       'kmiowR--]5;5t<FRs`)*z,YN,-(0WPi.v.[<$Iz,9@irN=Bp(wb5iVRsrz?Nor#B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_table';

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

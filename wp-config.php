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
define( 'DB_NAME', 'edupress' );

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
define( 'AUTH_KEY',         'wB4W$ ~`_#5 SHp$E*BWYtUc(_wE70hyWAZ#f!!KKc9BFy:O*3`,60)4s4J(CS|U' );
define( 'SECURE_AUTH_KEY',  '1eK5-}I8{mxd5TQ{Z$Km]B!g5IKBMbWPZ,>kiaAl}JC9SR0;Fs%Jh#4FCxmb2&A#' );
define( 'LOGGED_IN_KEY',    'a@]m>b<N (N0x~:ReX43i=~TGI/XbA.@jDdpgtOi~%v@`uE&^=[wf8o=GJK(IarP' );
define( 'NONCE_KEY',        ':o.VDe2C[imk.i@d-~&v>P@QdTGSMo79?`<XcTsPO0L#L_nf]{:$bw{2BAX:9;jA' );
define( 'AUTH_SALT',        '2?~C/RGMsLYZlm/h 0R Eq$2e2]V4pPGuh2:21`c7yG8:M]Uy[ ).dIRLA)mdr]S' );
define( 'SECURE_AUTH_SALT', '+QYgRY8ELl7$OOdpwS|^kBQ1Dow}r6LnPitWGazlCoB}@c4cqR`kp.|Ef?_ebi^[' );
define( 'LOGGED_IN_SALT',   'mr$PHO7UD_yy-xk&,Uv9AW]xG,bTsr|.t>zEiar>``K;-}=W>69$3ei}oj)E&umE' );
define( 'NONCE_SALT',       'ENM2KLCYKeqa<+K04Z3n(j%L3PMb$*idY|L-p}z8[)mG,M%2|>H0#`ln v.2Ss!$' );

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

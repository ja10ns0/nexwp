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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nexwp' );

/** MySQL database username */
define( 'DB_USER', 'nexwp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nexwp' );

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
define( 'AUTH_KEY',         '3%5,P0>,gh.AD=%MXcN,M[?q,~A1,(t-EQeR_Od$BX)N6g(`c?gLZ{)!qXhfD[Pn' );
define( 'SECURE_AUTH_KEY',  '}2teI[u}mx$he{e%</1}49#nfy[(7z~MqaTF=RD.9:^?b D.e4YyKrIduwnY :3Y' );
define( 'LOGGED_IN_KEY',    '5}5pMnrBv2mq361Q-6jKP%qfG`1&5:!1<8ZzWMG7{DO_4uZ,i8L|Ug55]L- 7V1L' );
define( 'NONCE_KEY',        'UnKGTPkrr{FRWOitr2~^OK[6Mr.sbZ)FB~Z}Z%.c 0^TMy),kyVh[dRPr.kG;jOr' );
define( 'AUTH_SALT',        '!O;/FNg+_SWG~vClFI`(R-0 ;|-qDnA.Wo>(y7E7z/#0I7~h=A4BSZ;Kb^Msw#;^' );
define( 'SECURE_AUTH_SALT', 'yu6KI}s+pxaS,5(o~nBLLWxfB?tHn8J5C} !]Y|f5ed(2=N~qxQP,HvxCr%Li%J]' );
define( 'LOGGED_IN_SALT',   '$H/<;uR+7N<1ZLCKiAT6z|5t!iuW5|[xviN]%Y#l1[0=FEE9f%CQvxY~26(>T8/O' );
define( 'NONCE_SALT',       'nId1rmpD%N>Oe}$s4@ A5z]d$TPt$8,6/5(zjHFxY*.1XLw_-%CauDM-}U+i*=Pf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nexwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define( 'WP_DEBUG_LOG', true );

define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

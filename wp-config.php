<?php

/*
|--------------------------------------------------------------------------
| Load environment config FIRST
|--------------------------------------------------------------------------
*/

if (defined('WP_ENV') && WP_ENV === 'production') {
    require __DIR__ . '/config/config.production.php';
} else {
    require __DIR__ . '/config/config.local.php';
}

/*
|--------------------------------------------------------------------------
| Shared global config below
|--------------------------------------------------------------------------
*/



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
define( 'AUTH_KEY',         '&,r.6~jo]i?.WxV3R|6eQ/ASU%7?H:^b7K>;#]g=TwVk)Y25.V*1bkMhmZ$g,4,d' );
define( 'SECURE_AUTH_KEY',  'F[#f?`!MbyG_j%Z*$5cuF@M=QA@M|@:T{A~!XaCVyVt%HJq`,z7i$}gT:<Y&Eelg' );
define( 'LOGGED_IN_KEY',    'QX$y[xTg%n[&$iMq_ikc[-[)b^36) &02;^.#k:g{gkfx= 6P+s7&k$B]:T4.bbq' );
define( 'NONCE_KEY',        'K^JcEHV5w~LDn0.d{UPM&Y>S$XMnuPE/72|plFzJ78{mh1xtnBrCA[])6SaAi#|k' );
define( 'AUTH_SALT',        '5Bl,06C![hs;I])rs  nB?vlBMKCK) i9c,%v9hQN6[qirBn+4v;CC+;cJ8+xu6$' );
define( 'SECURE_AUTH_SALT', 'P<#sg)[4VLvQ6&&V!J5#`&|LQ U[[>&/ YZ_4$1CZYP0CK}`VA`?T_YM.d=BWBUP' );
define( 'LOGGED_IN_SALT',   '2yX=A/?F$p@s#Q{gqu_1dHv|f^XsVpk!mU%:76O#f;34fM.Sbvfp/qQsQh7Gg4m[' );
define( 'NONCE_SALT',       'EY}I+sqSg}e.*!T*~![h`lM?6KV,7q!c_JBb`;dkz:->kW@}~/qG3u,$a&5U5]*}' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_MEMORY_LIMIT', '256M');

/* Add any custom values between this line and the "stop editing" line. */

define('SCRIPT_DEBUG', true);
define('CONCATENATE_SCRIPTS', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

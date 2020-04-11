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
define( 'DB_NAME', 'cyberAssistant1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'SgM J<&QwJ(fxaW~hWN5 X4)qk42n-AApKZy3Uk6>$%71<t.lqQ6@~kbJ*lqM9jx' );
define( 'SECURE_AUTH_KEY',  'yXTS!eV=uEOM iN}KyH-/9Nj4Fn/)K0c?nx2]-rSDyA^WmInW)h[Wt=qY%>%OuUR' );
define( 'LOGGED_IN_KEY',    '%AD1j72e3TwLUB]S-f7.4p2FXnC9lh7!eervC_<:,[o^{Y]SS>vk.hSJwr}yi)*q' );
define( 'NONCE_KEY',        'WY_5tVh(( 6%h`RsAvq7KUP!fyM>JeO;Erh4?w`lZ{^OaRiDHJ}d`0f0x<gUe<ly' );
define( 'AUTH_SALT',        '}~<M/]#9Y!TLAZ0Z16hE7~mtfb(/|j!$9*:$-5:4 oGSi1n@o*ZdPa<]uA=F%`Q-' );
define( 'SECURE_AUTH_SALT', 'IH0?X9z]*YeM0}~Szp:>CV@k3^Hru{V_lI|O;B[C+3SM]!CshX(GDeQ .s?+2IW&' );
define( 'LOGGED_IN_SALT',   '^~,0+K]zj)]-Dh0kxa/SBfg>=}8R#Lam=YdtBC]I6kJY,=}Q+TcSbDce8eSy4|-g' );
define( 'NONCE_SALT',       'hAq2Z_LV^<>,gZn/fnuFG;0Y >hxJF|XIOVZ[j4z(wFA7~WAh^h<^-X+vf5;JwI]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

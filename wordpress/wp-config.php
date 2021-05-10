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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'Ek T>(K+KX%Y?*}:gtQ4-6;g@~N{ZARK8#GZD!eAJaO-?aA%~m7DyN+m$yXcfTt}' );
define( 'SECURE_AUTH_KEY',  'HpmPrThy/+C}[;Z+XO2i#&8J$+8]K%rb XF+&#|+QhNf$X>)(U4F5.X)<B9;iGvw' );
define( 'LOGGED_IN_KEY',    '^:asiXP>H}:#5b8UUQeqoA)-ay[@f_[_e1~1My}xT9qHNeWCR~T)yR!QO1rU RE/' );
define( 'NONCE_KEY',        'N;Qm~As+!T$e&bq H%X@$,&Ae[vs_xm>}KKTt2Sh{>,-@WAisV><sRcJGI.r#Y7h' );
define( 'AUTH_SALT',        '@T))3c|<]3[16Eysn`d3@ - 2?/_?/J)xaspZL#d !?wr-_RW0&AL2{=U;=EZwV/' );
define( 'SECURE_AUTH_SALT', 'oes7+-awfU:o*qJ]g2Vg:Q:5;+eV;Ydp3 yxQATS1Pfzg+TprD_`lGZ*h+YUIOxp' );
define( 'LOGGED_IN_SALT',   'fc6.&PFBMLu4LagA{gL_-o B1^02VBI?kAY.6+CbTMiFGcED@Iq}@8s x*%0|^q_' );
define( 'NONCE_SALT',       'f0aGoi`IT4LK?Kq*>fIO7zgFx[LmHyhTp7xue+%ySt9>nq;+#8;/;RrY`}!1apo3' );

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

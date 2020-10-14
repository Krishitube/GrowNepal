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
define( 'DB_NAME', 'GrowNepal_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rasmi85100' );

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
define( 'AUTH_KEY',         'L,q@Ch7y&2?yfO%^t*e?NPiqoo`d(+Z#x|%J9(`HhyVC1v04>xY66BdV0MNyvI$T' );
define( 'SECURE_AUTH_KEY',  '7yE}DaCpc3ax Z~obd)9{|9>bmAF.d@bpQ2+}}Xw`O:lp~D!^ eH[ha`)H!Z!>+K' );
define( 'LOGGED_IN_KEY',    '8hg&&p6n,0/@hi}JC#.BejUR7 q=Cb?P8um}{gaOgymp=%{>[-%[vQQ7vac|W;]n' );
define( 'NONCE_KEY',        '{y7k=oGyAa{Bp9n!R(>9b_cRalvdQQUnAn |!]k@<]qgDZs7?)QCI(v$5w.fHMxB' );
define( 'AUTH_SALT',        '-hSme:XgVwVd*-^OD^/NuS$WfDUwnx,s=1[+(7m1$)..!ykS5/$B!ut[Jl:f-<Mf' );
define( 'SECURE_AUTH_SALT', '^HZaFab[U=:Z&@F-Z,caP;yN/:rZ_m~f,cc.M^N!iL)i%S#EehO-HM2{$<7/o)WS' );
define( 'LOGGED_IN_SALT',   '%+>.,LUg65t9|D12w(arL=l^.`p2)VS+?xJRNJyt`1K^PpAA-Zp/SM#*P|-:ja~^' );
define( 'NONCE_SALT',       '(#goOeA E1$iie7w@/<+q%BVz<8`zU.OfBi|qFfr8kl-LT]{;-71u#jSEG.^gNTW' );

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

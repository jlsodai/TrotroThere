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
define('DB_NAME', 'trothere');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5tYF/]Z$G#Fe):EE$qn?}lGJMO=w2X3sG;;`cf*;dlwPtbKh(-6xl3eM!v$1N? n');
define('SECURE_AUTH_KEY',  'V*x^;,ls)8Ve@M*|daG-zB=NygYs]COuxdbpne/r>F^c9KG-}~|l[-;K@s`@ieA.');
define('LOGGED_IN_KEY',    'DQidfoG^[H4D]my>B~0+}&P}Q3%:o)6Yke0j3wbeJ+lXv1t~_D8[&)tL|$IVXxtV');
define('NONCE_KEY',        '%Y~t!MH0g# ^e*VK`|}(% 6Fv4>=y?2gns9WABZIDGFfp`l^Amp/DJ=5qIo[%Nq8');
define('AUTH_SALT',        'ZDj]8MajCykO`=z[PP^CC[VXrsu3/st{a~<:)V(=Q6?A)125ugRUX*_{}QyW xX3');
define('SECURE_AUTH_SALT', 'yPn0]zTG_%B+SF8:$EF}3PnxFF|Ce!7|Ir/CBEK].8wb2;1D? |&Z~27}7NjmS-{');
define('LOGGED_IN_SALT',   'sz5>38a.*bEhUgNhn^2Q+}!7%b*rdE@ni81SmKRQ_=+ UJd!2bv[L)z.q;{8; ~H');
define('NONCE_SALT',       'Zx0W2<{2AFzi@fH21{C)BHoS3@7|Z6o;_haJ3W*8W.FYDO_:i:Z[+3:G#PX)c(MC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'et|mP)Oa;17 Ke_MrHSu%S5.3$rvOWQc!be2RX/pFkh.c##89q-<@Um=dR_33W}|');
define('SECURE_AUTH_KEY',  '`ck%Nr(F](]9ZXLKR@pJ~J,33F-A3cs9f3V8zz,[_)%ouL:S]yV7`dQiP k;bYar');
define('LOGGED_IN_KEY',    '_gt<lS3_7sdZJ52/8QAL-g;djXqGy(PwjnXD$74h!dLAe~sCWf0~cq9w}cx`+nnF');
define('NONCE_KEY',        '<fE&?ScWgj(P0+8`}zy+?:,&l%n%SO}{j%c6VN;,9sG^4w}3dR}_TgYRRgE~1a6i');
define('AUTH_SALT',        'O$}DV2xB.hcao1O9=Ur&4K&`<!76+Q80j>sV#?Rdu<-&NCpy7SxYUoyIQ:0si!pc');
define('SECURE_AUTH_SALT', '$gea3)ub]*!r7o5&|SeBVzLj%iG.Tx$yk8qZu:Sjpo9ZN~0H4({0gCqSvfV)@ &y');
define('LOGGED_IN_SALT',   'QMM=2$LuO)}e}+[zcT2T4r_ z*bPNcxjUDdU2^^PM&v(pCkNQ2X`VN,Sqd?dmLhf');
define('NONCE_SALT',       '4k&ogrGi&LFGqCBFTR)js38}<Vp:K1oVnTeR:en_4x?<:xm*kp<M;,Na7S>G)WYl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

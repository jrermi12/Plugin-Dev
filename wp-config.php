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
define( 'DB_NAME', 'plugindev' );

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
define( 'AUTH_KEY',         '/s7:RO>!})F,g.6BT=E4>ti]`%U7*UZnv4x5Tu/Osvz`+a!(hL9nENXk$Ws``5DV' );
define( 'SECURE_AUTH_KEY',  '|J?!;saRmxFnL@k@sN_*{W-_(p.lmj,y[WwZ=<BaCD:KAlEl~2(C9vA.fD49V5Xu' );
define( 'LOGGED_IN_KEY',    'Puc8JX7U+(&rnD}m^LH5DfJxaQWnDhYj^!<`N^C;FO$EP;tg$0f.t.(du9(Y{0;F' );
define( 'NONCE_KEY',        'O37W+uKv}rt11R<{18Tu^=*ehR`a^zAyyH]-..,YcHLJJ@/Rv0CwZd~/|m*SW(3t' );
define( 'AUTH_SALT',        '`h4*a:_(xd3@l?rSLW6-PHLyzb:wWCR+c/1)HVGZ|I]tS/`SPN+W,|}0*]*7IQIn' );
define( 'SECURE_AUTH_SALT', 'Sp[ N,=mNQo,j9TR+>f%O_d.ZSVEd4oW;Qn/%^9tI?/`n?%z6<3ZH4]PgI|ZcdlI' );
define( 'LOGGED_IN_SALT',   'GYciyY@D2*;}*L5a9HEADK*DgN-XP[LL-Ni{I?Z$lnH2o,DBp&?N2yOBdyYgE7ic' );
define( 'NONCE_SALT',       ')mb_wEqbu[<lfYTSlpj;pMM^]Us$=~Yz]]m:yhY4hx84#HW$a^*yE]sfxro8h]XX' );

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

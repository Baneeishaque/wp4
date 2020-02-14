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
define( 'DB_NAME', 'wp-4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         's,o:/:L/&P l[`!h@:GPD%SIs^-0VLJmj+]WU+{~$>cOm#nU3U.YK.hOVSFJ$)F{' );
define( 'SECURE_AUTH_KEY',  '+ZFPokTCQxt7(:*lr]3yPEncAiYD{H_Bi0g#<UZO#_,[v#ay@33:N*iX5b8m.R[~' );
define( 'LOGGED_IN_KEY',    'RHCY$k0.JF^E<j1Z87vtoGgV5H6)0!|L8vX|1)e2f7}8VN :00T</)mc:=KtgTPt' );
define( 'NONCE_KEY',        '/eH?~WVR}qg8?xnHsMJ%A{@/n|zGvh3Z~->vqAglzZ6)FrzBoJm5=V.f5AP#r!..' );
define( 'AUTH_SALT',        'L-^=ieWGT^Cf;|d#u$9gI}H o#NCF1l0Z7d6cdTmf?#M=xh2Qp($[16q?Z<(yO#Q' );
define( 'SECURE_AUTH_SALT', 'B:Vh<GQXq6#eE!4bvTgp2If5gJ8)0x&mPA#iST2g3R{O}D-tdTleW?zaTA|/[Bel' );
define( 'LOGGED_IN_SALT',   '`Vt)OT NJ%mtt=rmsliu}=4Sj;6$=/;#G#9Uir^a2|w7RZo}sqdX-cXW*{|?2u=V' );
define( 'NONCE_SALT',       '/[%zRY|H1SukH2Hz$$+q]1.:Gu`S-GHw2)8`3kFpMN4*.R}:[us%XxXV+Q(Yxht&' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

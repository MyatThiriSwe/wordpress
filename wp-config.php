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
define( 'DB_NAME', 'word_pressmm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mmo@04821530' );

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
define( 'AUTH_KEY',         'I+HH(p&X(&E_||-7 YVJV,%*^U@!uFy%10g#D MmRcW9|So*a |_{%;$V8cP+;0D' );
define( 'SECURE_AUTH_KEY',  'Q?&a{2,4x+IncC8oaprMtWC,d:Qa_*JZ9W@iQ4U8@/E6iNj!)/5_V7+|@A^h~Xr!' );
define( 'LOGGED_IN_KEY',    '(lUC@V(l>sg38+9dKk>n;E7{~$P7K*AA89ofTTpqry4J9cSd^|.*RN>HFsZ8eGJ%' );
define( 'NONCE_KEY',        '!M+mpnHX]3&p0{0V-%J)*@H?8cD$[T@*S5@3gm)LM~84^vUus2*XAdLWB4Eh1%?)' );
define( 'AUTH_SALT',        '>`m7.Z-t^~3]&?9tUvWtL7e>=o6MnEBNz/z;#CtdDU}B|d6-j,po:2@$?[v%ufXf' );
define( 'SECURE_AUTH_SALT', '|0n8Xv]n~@aLE~ Age0EFrbXretB$r~!a}[|YDykKc3_6!y-tICaL2S[2aJ)!kBj' );
define( 'LOGGED_IN_SALT',   'TF6h6L~@Q7yc-o?<=3K(z?<Y1y@1!A?uWZd{IOhb26XGyuPa*3;O$<[5uoi7onXJ' );
define( 'NONCE_SALT',       '`jN:#`xmSx-2&SfmzZ)._e1ut|)GGZ(x>oDW=PYW}s@]c_WH9!7e357K<?o3_0^f' );

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

define('FS_METHOD','direct');

<?php


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'usercrea_afcfitness');

/** MySQL database username */
define('DB_USER', 'usercrea_afc');

/** MySQL database password */
define('DB_PASSWORD', 'zWDIga4e3k;bPt3wV6o');

/** MySQL hostname */
define('DB_HOST', 'ftp.usercreative.co');

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
define('AUTH_KEY',         'M-/J-5yXDiXf|xvi%_KOI}ZBe7fL7oyOpj)q,JJ }nAwwFj~&ElNQIeOd#BG*krr');
define('SECURE_AUTH_KEY',  '2=0]y,nUl+KLNo&|+[_n BtaZ4S!YQJ5NEw2[G+.~!+M<Oz*uZwMy~/-UgIoO*`K');
define('LOGGED_IN_KEY',    '{e?W]xxYIraL7EwfMW?z^*(Ep2[A@rBs|AdVv;!1g/C+Mz;hJWG>+)YR,Q*DU&Sx');
define('NONCE_KEY',        '2Be$?mwFxHKZU!-HjLuq<Fec)Uo@#!MT[aW1QcXoJzD;D=oRJvDm8-RU~0C@|gS(');
define('AUTH_SALT',        '3Zd-VN7w6yay==&FY;qVLObU{W{e+QGZLk]&DGa-6pM0G4Lm|%jIx^V,sNX, w|-');
define('SECURE_AUTH_SALT', 'c>h-EvI.:S``ntHuFmu+$t%VVABI7Y|$5?!.G~;48$g.i> 7Lj$kQ-n0+uazz2b3');
define('LOGGED_IN_SALT',   '~hwJ}ihN%X$0J6OQ2rI6o+Wdz=6o6eYNd)8`_?avxA+50d,x!<#b[jkQaD`|4Lj=');
define('NONCE_SALT',       'c)qZ@M[-+JAJ8nPyA]q_.k+1(l*{I9iz$tn`PLYOLRKp6&+8_.4EBVGmPqC?Dyxq');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'wp_';

define( 'WP_MAX_MEMORY_LIMIT' , '512M' );
define( 'WP_MEMORY_LIMIT' , '512M' );

if ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') {
    define('WP_HOME','http://afcfitness.staging');
    define('WP_SITEURL','http://afcfitness.staging');
}

/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

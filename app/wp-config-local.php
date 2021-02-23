<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'afcfitness');

define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


# Security Salts, Keys, Etc
define('AUTH_KEY',         'M-/J-5yXDiXf|xvi%_KOI}ZBe7fL7oyOpj)q,JJ }nAwwFj~&ElNQIeOd#BG*krr');
define('SECURE_AUTH_KEY',  '2=0]y,nUl+KLNo&|+[_n BtaZ4S!YQJ5NEw2[G+.~!+M<Oz*uZwMy~/-UgIoO*`K');
define('LOGGED_IN_KEY',    '{e?W]xxYIraL7EwfMW?z^*(Ep2[A@rBs|AdVv;!1g/C+Mz;hJWG>+)YR,Q*DU&Sx');
define('NONCE_KEY',        '2Be$?mwFxHKZU!-HjLuq<Fec)Uo@#!MT[aW1QcXoJzD;D=oRJvDm8-RU~0C@|gS(');
define('AUTH_SALT',        '3Zd-VN7w6yay==&FY;qVLObU{W{e+QGZLk]&DGa-6pM0G4Lm|%jIx^V,sNX, w|-');
define('SECURE_AUTH_SALT', 'c>h-EvI.:S``ntHuFmu+$t%VVABI7Y|$5?!.G~;48$g.i> 7Lj$kQ-n0+uazz2b3');
define('LOGGED_IN_SALT',   '~hwJ}ihN%X$0J6OQ2rI6o+Wdz=6o6eYNd)8`_?avxA+50d,x!<#b[jkQaD`|4Lj=');
define('NONCE_SALT',       'c)qZ@M[-+JAJ8nPyA]q_.k+1(l*{I9iz$tn`PLYOLRKp6&+8_.4EBVGmPqC?Dyxq');

$table_prefix  = 'wp_';

define( 'WP_MAX_MEMORY_LIMIT' , '512M' );
define( 'WP_MEMORY_LIMIT' , '512M' );

define('WP_HOME','http://afcfitness.staging');
define('WP_SITEURL','http://afcfitness.staging');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

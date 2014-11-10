<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sql_nile');

/** MySQL database username */
define('DB_USER', 'sql_nile');

/** MySQL database password */
define('DB_PASSWORD', 'sql_nile');

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
define('AUTH_KEY',         'LH#O^lCr3f2V$G2S}`e-Q0WdcY8euR-S%I:yTR0xxnyi;uADL-b=0]=$Ajh7c9!4');
define('SECURE_AUTH_KEY',  'er- {LZT&cOxxwdklq)3y7GLm-f|t*B5JbSA100myU_)(=Wa]+-VP?XX(6.-+vnI');
define('LOGGED_IN_KEY',    'Z_+2[h+Mbg43D*&~nVqEkng+9X)rr`:E[73WtSAl:m}?|OG2Bu*+dSlb/8k~nyu?');
define('NONCE_KEY',        '7zB*o0GBb#z{fFQ||XVe13M_TV[t/rG80]e|m-k9O(XL9_bgaxl)j=tQl{~rO{Fs');
define('AUTH_SALT',        'DtxxtN3_:9o;t<Zg1NmWzbB]Jc;dUk|_Lb-_}jtRXU/kk;d*x6_i)k4cY[|!H17:');
define('SECURE_AUTH_SALT', '[=q*NW3VF%bx>9]ET2zP#W.a{cdt+8fwb5C]&:zNSf2)v4+|8UKnk7)Z/ BM2B!X');
define('LOGGED_IN_SALT',   '1iFw%!^FUT=fMt8lp6m&G/Tfn~to3PQ^wi0g7{ 07XWy8pzWbWRL1!beiA1FG}&_');
define('NONCE_SALT',       '`n|]7Gq.r(.YO2sx;p9#(:i%_-Jfz?IY2uK:>wH):53q]dN:J]SB[*+tJxa)yHvS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define( 'FS_METHOD', 'direct' );
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'db:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'y^xb|m2BQvvh,ji}rXqDbu xRMzXE+deg4Fi<%< JHf)AePGM]LB8/b6b=J/=9PL' );
define( 'SECURE_AUTH_KEY',   'q5Ff)hJqZ|LovB^4&UZ5*N)`P>d[0TUbztx?(jURN7R:6iUr~<Dn}F}8k^&amDO}' );
define( 'LOGGED_IN_KEY',     '$pvgb9@pJf(vqPu5QQ2o G}nW`Q*_u*Y0jXSg,sc]D,0V=LtvAwtY}8Sbuzm8hRN' );
define( 'NONCE_KEY',         '?oQV-e>3!E4ACR_uXO!@TT?UR9<#jMvr}0Knk`23NZ4v(J4Y4!]P/U|ptR>~l@|G' );
define( 'AUTH_SALT',         '~La&*^pjJAlyg[TGyo9]cS%j=N]2ny[dS3a$>W1PF/gx:nT&la}0(n|,hy!;*u9 ' );
define( 'SECURE_AUTH_SALT',  'PrTgTWba3JJVq}sUw3qr#R;* +5epW3mOV!|&vuL[&`n HJkDP06vx}(UR%1;cF,' );
define( 'LOGGED_IN_SALT',    '8b6<7G WS?M(7jtLfNIVyeN95.wIFN]~y7*:S&/v$wT,PN[+O,kI+4vJ[hqsqDtB' );
define( 'NONCE_SALT',        '~CrCXQnltau3pH1X~N06KtJy9u]*.!|r,fPJ>[0@u:8,1#* us1/{);2P%#])8%f' );
define( 'WP_CACHE_KEY_SALT', '.[Gsl( !Z|DTg:o}z;JR_ysND^~JBF2+&%),81y/D@04uuP=vhIyD{=[L^S9aceg' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

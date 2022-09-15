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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '+):f{eDq}igf$v/pI47Q#Fja+oxTW>e.w7SmIx-j[4%>~=F}xnod8nv )yM$mBm|' );
define( 'SECURE_AUTH_KEY',  '*_U.q==jA^!o4V3<m)Y=FSjOBE4-Q$+xsQj*6Gu>`C15Hx]9Uc@N6FpSai[e[Rb5' );
define( 'LOGGED_IN_KEY',    '}1o^favPdLAl@>dJ>u;P34&<>:JwC~cz_s*| 0pNrB2``XlZTi`uG-ufnH_VR6yR' );
define( 'NONCE_KEY',        '0jH33vAi[YXD0ZYB/vogq2,h|V*G2Z>:/7lk2iOVMLSz<0*@ooZ#GZ$nO65CNm#|' );
define( 'AUTH_SALT',        ',2jTsv-!<>#EO%_<[f|I R=(YAu*wk]Kr<*unoTtS%<WAf/am{ir-O;J-ULd<D`8' );
define( 'SECURE_AUTH_SALT', '>*H.sji$P1ODq_<c7=[J*3MX}8?fP`9ld/><@HW/#$eMrcfe2oMv@IYY vnTDB9r' );
define( 'LOGGED_IN_SALT',   '!rde]i$//jl8^H?Rjy(:U1Q<N4AXUVr^[I;&.08G,-bCN<nTD Jhy2#@*)Px|J0{' );
define( 'NONCE_SALT',       '_Q9]%:(er!P@{$K~PHG7ZF<GXGFox|b`]bQSY 0>=$,uo_ st.J9@}=>O@>w9piV' );

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

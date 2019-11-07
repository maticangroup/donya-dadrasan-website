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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maticangrp_donya' );

/** MySQL database username */
define( 'DB_USER', 'maticangrp_donya' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SX73rRsD4' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '1aw@*KB2^YXz2Bqca{mYL3r:+rT7D`k.]]vWwLoe,acz&),<o|+./rE6ha@+?|rN');
define('SECURE_AUTH_KEY',  'Xa#Q_aaGN~}c6Tkq%1n|zw=}b.$d)d[PzB+/L=N*dB,;1=lRG)OBE)p+J%UoRg:K');
define('LOGGED_IN_KEY',    'd^px7a:CwX.&*+w|YZQh$|pnfRZt|_@bc/B&Z &|z&5;Bw6oiNd_M}E+{>.+)K$D');
define('NONCE_KEY',        '[IDUJToqjK&<npM7A&#U#jbhKdW%~|Zo|:,+j++>XL2)|,$mnu6.?fV1:@F?+aHC');
define('AUTH_SALT',        '=INWy~iY>7^(o/o_/3M5if-n~mYOl LIEP*DQ+L!-M?8n+1Hv1M41-[/Xj-f}k?r');
define('SECURE_AUTH_SALT', 'VLx7E7{_f^UAc,kgIP|3G<%(eGgVQ@!!fV,@pALzDo0VS1WAQmo:uuy=>EAeMTt_');
define('LOGGED_IN_SALT',   '_yEa&Z>l/HqP /5B/}f#V+PwYw_7DN0wlTRzHC&UFh|&rfO2h$tu2t}!*O_G:jFa');
define('NONCE_SALT',       'B-q8|?|nG+)V0>CS-i))Doe@`X4.P81CwIG+BJ6S$(ZV;-`sUBD&s=%DTr^wsb/?');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
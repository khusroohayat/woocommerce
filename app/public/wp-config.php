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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'ihPk1GlxjMolIyjQzwHSETM+mztfiRYUFhFbnfpoqobDe8GdJ14zYXEjQ5JoPDVWZqPOGwD6atAKnJCo7Ced4g==');
define('SECURE_AUTH_KEY',  'qHID+il5PHW627Uhe4nbq3rph9J+DjdbOsWRl3cSx7M4Dp8HJeU63HZKLdiswd4GM6EFFkzQ7mcOgxid7+QYfw==');
define('LOGGED_IN_KEY',    'Y1twmgW0km8OK/+YmRcESx1w1RCEs8eA0/YG4uDoFnj4nLWxjOZMRwyMvUUTQxRoniA7TZXOU+pT/5Tu0QXXzA==');
define('NONCE_KEY',        'qfl0+fyizh6aTQwvhN9pyGAlk30sbi2LTbrpG108D8F7rhRE+Lr5UtHkgeaIK1YxVknLOfLb88OYJTjy3wxhlA==');
define('AUTH_SALT',        'Cq20rlKK/tSg7ATLepgvnQIZLwpdslerSqC0lvyKlmUWiQkQ/qeHyKrdZ3DxQQshnobflIR2AEWPcLFEovT6Jg==');
define('SECURE_AUTH_SALT', 'q9lOzn8ewoPpchTD0+IxPKd7QPPDFu8K20uJWe8fyBcrj4d9meBNShRtRZ1e4i/I39EQiGPMhuPROpStofPJtg==');
define('LOGGED_IN_SALT',   'opRD+k8NLGVz15n+eEj3+IcLKqsR957vd+WH2nByTo4f0d9H92I4+nNC7qjvnyAXjfqaWtMYZspXp8i40MVuSw==');
define('NONCE_SALT',       'VTq9uR1syDQ1mFDlJIr0qQtHtq+bwzI3bfCNyidrDv5JGB/YpzTRfNAi3fH86hYX3IetyhtJ+XtxCC8bIEPLMA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

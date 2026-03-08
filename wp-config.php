<?php
// Generated wp-config.php for Dokploy deployment

define('DB_NAME', ''Worldpress_db'
define('DB_USER', 'yard'Worldpress_db'.com');
define('DB_PASSWORD', 'yarden06');
define('DB_HOST', 'servi-wolrdpress-site-jordan-glhp8t');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix = 'wp_';

define('WP_DEBUG', false);
define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://lp.servi.co.il');
define('WP_SITEURL', 'http://lp.servi.co.il');

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';

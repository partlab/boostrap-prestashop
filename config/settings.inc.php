<?php
define('_DB_SERVER_', getenv("DB_1_PORT_3306_TCP_ADDR") . ":" . getenv("DB_1_PORT_3306_TCP_PORT"));
define('_DB_NAME_', 'prestashop');
define('_DB_USER_', 'root');
define('_DB_PASSWD_', '');
define('_DB_PREFIX_', 'ps_');
define('_MYSQL_ENGINE_', 'InnoDB');
define('_PS_CACHING_SYSTEM_', 'CacheMemcache');
define('_PS_CACHE_ENABLED_', '0');
define('_MEDIA_SERVER_1_', '');
define('_MEDIA_SERVER_2_', '');
define('_MEDIA_SERVER_3_', '');
define('_COOKIE_KEY_', 'HKmwQZIiB19dA3Ptupk94L4OgbHgZ62AAhZBRhQkbRTIGOacwEQYpWO7');
define('_COOKIE_IV_', 'S8b428xi');
define('_PS_CREATION_DATE_', '2014-09-06');
if (!defined('_PS_VERSION_'))
	define('_PS_VERSION_', '1.6.0.10');

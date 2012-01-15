<?php

/* Site's Paths */
define('SITE_URL',             'http://' . $_SERVER['SERVER_NAME']);
define('DS',                   DIRECTORY_SEPARATOR);
define('SITE_DIR',             realpath(__DIR__));
define('SITE_DIR_ROOT',        rtrim(SITE_DIR, DS) . DS);
define('SITE_DIR_CONFIG',      SITE_DIR_ROOT . 'config' . DS);
define('SITE_DIR_CONTROLLERS', SITE_DIR_ROOT . 'controllers' . DS);
define('SITE_DIR_IMAGES',      SITE_DIR_ROOT . 'images' . DS);
define('SITE_DIR_LIBS',        SITE_DIR_ROOT . 'libs' . DS);
define('SITE_DIR_MODELS',      SITE_DIR_ROOT . 'models' . DS);
define('SITE_DIR_VIEWS',       SITE_DIR_ROOT . 'views' . DS);
define('SITE_DIR_ADMIN_VIEWS', SITE_DIR_VIEWS . 'adm' . DS);

?>

<?php

    /* Errors OFF */
    error_reporting(E_ALL ^ E_NOTICE);

    /* Get Constants */
    require_once realpath(__DIR__) . DIRECTORY_SEPARATOR . 'defines.php';

    /* Get Libraries */
    require_once SITE_DIR_LIBS . 'Smarty' . DS . 'Smarty.class.php';
    require_once SITE_DIR_LIBS . 'redbean' . DS . 'rb.php';

    /* Get Site configuration */
    require_once SITE_DIR_CONFIG . 'SiteConfig.php';

    /* Get Controller */
    require_once SITE_DIR_CONTROLLERS . 'Article.php';

    /* Get templater */
    require_once SITE_DIR_CONFIG . 'Pager.php';

    /* Get Singleton */
    require_once SITE_DIR_CONFIG . 'Singleton.php';

    /* Get Instance */
    $instance = Singleton::getInstance()->getInit()->getLayout();

?>

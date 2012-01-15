<?php

class Singleton 
{
    static public $instance = NULL;

    private $_siteConfig;
    private $_db;
    private $_content;
    private $_layout;

    private function __construct() { }

    private function __clone() { }

    static public function getInstance() 
    {
        if (self::$instance == NULL) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function getInit() 
    {
        if (($this->_siteConfig = new SiteConfig()) and ($this->_db = new Db()) and ($this->_content = new Article())) {
            return self::$instance;
        }
    }

    public function getLayout($mode = NULL)
    {
        $this->_layout = new Pager($mode);
        return $this->_layout;
    }

}
?>

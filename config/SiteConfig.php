<?php
    
class SiteConfig 
{
    public $siteName;
    static private $_DBServer;
    static private $_DBServerPort;
    static private $_DBUser;
    static private $_DBPassword;
    static private $_DBName;

    function __construct() 
    {
        $this->parseIniXML(SITE_DIR_CONFIG . 'ini.xml');
        $this->getORMlib();
    }

    /* Parsing ini.xml with Site's configuration */
    function parseIniXML($iniFile) 
    {
        $iniXML = simplexml_load_file($iniFile);

        $this->siteName        = $iniXML->siteconfig->sitename;
        self::$_DBServer       = $iniXML->siteconfig->dbserver;
        self::$_DBServerPort   = $iniXML->siteconfig->dbserverport;
        self::$_DBUser         = $iniXML->siteconfig->dbuser;
        self::$_DBPassword     = $iniXML->siteconfig->dbpassword;
        self::$_DBName         = $iniXML->siteconfig->dbname;
    }

    private function getORMlib() 
    {
        R::setup('mysql:host=' . self::$_DBServer . ';dbname=' . self::$_DBName,  self::$_DBUser, self::$_DBPassword);
    }
    
}

?>

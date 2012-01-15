<?php
    
class SiteConfig 
{
    public $siteName;
    static public $_DBServer;
    static public $_DBServerPort;
    static public $_DBUser;
    static public $_DBPassword;
    static public $_DBName;

    public function __construct() 
    {
        $this->parseIniXML(SITE_DIR_CONFIG . 'ini.xml');
    }

    /* Parsing ini.xml with Site's configuration */
    public function parseIniXML($iniFile) 
    {
        $iniXML = simplexml_load_file($iniFile);

        $this->siteName        = $iniXML->siteconfig->sitename;
        self::$_DBServer       = $iniXML->siteconfig->dbserver;
        self::$_DBServerPort   = $iniXML->siteconfig->dbserverport;
        self::$_DBUser         = $iniXML->siteconfig->dbuser;
        self::$_DBPassword     = $iniXML->siteconfig->dbpassword;
        self::$_DBName         = $iniXML->siteconfig->dbname;
    }
    
}

?>

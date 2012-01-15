<?php

class Db
{
    private $_connection;

    public function __construct()
    {
        $this->getConnection();
    }
    
    public function getConnection()
    {
        $this->_connection = mysql_connect(SiteConfig::$_DBServer, SiteConfig::$_DBUser, SiteConfig::$_DBPassword);
        if(!$this->_connection) {
			die("Database connection failed: ". mysql_error());
		} else {
			$dbSelect = mysql_select_db(SiteConfig::$_DBName);
			if(!$dbSelect) {
				die("Database selection failed: ". mysql_error());
			}
		}
		mysql_query("set names utf8") or die("set names utf8 failed");
    }
    
    public function getQuery($query)
    {
        $result = mysql_query($query);
        if(!$result) {
		    die("Database query failed: ".mysql_error());
	    }
		return $result;
    }
}


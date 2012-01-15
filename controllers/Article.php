<?php

class Article extends Db
{
    public function addArticle($article) 
    {
        foreach ($article as $key => $value) {
            $array[$key] = $this->getAntiInjection($value);
        }

        $query = "INSERT INTO articles(title,text,user_name) "
               . "VALUES('{$array['title']}', '{$array['text']}', '{$array['user_name']}')";
        return $this->getQuery($query);
    }

    public function updateArticle($article)
    {
        $query = "UPDATE articles SET title='{$article['title']}', text='{$article['text']}', "
               . "user_name='{$article['user_name']}', public='{$article['public']}' "
               . "WHERE id = '{$article['id']}'";
        return $this->getQuery($query);
    }
    
    public function deleteArticle($article)
    {
        $query = "DELETE FROM articles WHERE id='{$article}'";
        return $this->getQuery($query);
    }
    
    public function acceptArticle($article)
    {
        $query = "UPDATE articles SET public='1' WHERE id='{$article}'";
        return $this->getQuery($query);
    }

    public function disagreeArticle($article)
    {
        $query = "UPDATE articles SET public='0' WHERE id='{$article}'";
        return $this->getQuery($query);
    }
    
    public function getArticles()
    {
        $query = $this->getQuery('SELECT id,title,text,public,user_name FROM articles ORDER BY id DESC');
        while ($array[] = mysql_fetch_assoc($query));
        return $array;
    }
    
    public function getArticle($id) 
    {
        (int) $id;
        if (is_numeric($id)) {
            $query = $this->getQuery("SELECT id,title,text,user_name,public FROM articles WHERE id = {$id}");
            return mysql_fetch_assoc($query);
        } elseif ($id == '0') {
            $query = $this->getQuery("SELECT id,title,text,user_name,public FROM articles WHERE id = 1");
            return mysql_fetch_assoc($query);
        } 
        else {
            $query = $this->getQuery("SELECT id,title,text,user_name,public FROM articles WHERE id = 1");
            return mysql_fetch_assoc($query);
        }
    }
    
    public function getSiteConfig() 
    {
        $this->siteConf = new SiteConfig();
        return $this->siteConf;
    }

    public function getAntiInjection($value) 
    {
	    $string = strip_tags($value);
	    $string = mysql_real_escape_string($string);
	    return $string;
    }
	
	public function getLoginPassword($loginPassword = NULL) 
    {
        if($loginPassword == 'password') {
            $query = $this->getQuery("SELECT password FROM logon WHERE id = '1'");
            return mysql_result($query,0);
        } elseif ($loginPassword == 'login') {
            $query = $this->getQuery("SELECT login FROM logon WHERE id = '1'");
            return mysql_result($query,0);
        }
	}
	
}
?>

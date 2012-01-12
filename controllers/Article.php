<?php

class Article
{
    public function addArticle($article) 
    {
        foreach ($article as $key => $value) {
            $array[$key] = $this->getAntiInjection($value);
        }

        $sql = "INSERT INTO articles(title,text,user_name) VALUES('{$array['title']}', '{$array['text']}', '{$array['user_name']}')";
        return R::getRow($sql);
    }

    public function updateArticle($article)
    {
        $sql = "UPDATE articles SET title='{$article['title']}', text='{$article['text']}', user_name='{$article['user_name']}', public='{$article['public']}' WHERE id = '{$article['id']}'";
        return R::getRow($sql);
    }

    public function deleteArticle($article)
    {
        return R::getRow("DELETE FROM articles WHERE id='{$article}'");
    }

    public function acceptArticle($article)
    {
        return R::getRow("UPDATE articles SET public='1' WHERE id='{$article}'");
    }

    public function disagreeArticle($article)
    {
        return R::getRow("UPDATE articles SET public='0' WHERE id='{$article}'");
    }
    
    public function getArticles() 
    {
        return R::getAll('SELECT id,title,text,public,user_name FROM articles ORDER BY id DESC');
    }

    public function getArticle($id) 
    {
        $id = $this->getAntiInjection($id);
        $sql = "SELECT id,title,text,user_name,public FROM articles WHERE id = {$id}";
        return R::getRow($sql);
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
            return R::getCell("SELECT password FROM logon WHERE id = '1'");
        } elseif ($loginPassword == 'login') {
            return R::getCell("SELECT login FROM logon WHERE id = '1'");
        }
	}
}
?>

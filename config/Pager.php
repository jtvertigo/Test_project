<?php

class Pager extends Article 
{
    public function __construct($mode) 
    {
        $this->getSmarty();
        $this->getVariables($mode);
    }

	public  $pager;

    private function getSmarty() 
    {
        $this->pager = new Smarty();
        $this->pager->setTemplateDir(SITE_DIR_VIEWS);
        $this->pager->setCompileDir(SITE_DIR_LIBS . 'Smarty' . DS . 'compile' . DS . 'templates_c');
        $this->pager->setCacheDir(SITE_DIR_LIBS . 'Smarty' . DS . 'compile' . DS . 'cache');
        $this->pager->setConfigDir(SITE_DIR_LIBS . 'Smarty' . DS . 'compile' . DS . 'configs');
        $this->pager->debugging = false;
        return $this->pager;
    }

    private function getVariables($mode = NULL) 
    {
        $this->pager->assign('siteConfig', $this->getSiteConfig());

        if ($mode == 'admin') {
            session_start();
            $this->pager->setTemplateDir(SITE_DIR_ADMIN_VIEWS);

            if (isset($_SESSION['allow'])) {
                if (isset($_GET['logout'])) {
                    session_unset();
                    header("Location: ./admin.php");
                }

                if (empty($_GET)) {
                    $this->pager->display('indexadmininfo.tpl');
                }

                if (!empty($_GET['manage'])) {
                    $this->pager->assign('article', $this->getArticle($_GET['manage']));
                    $this->pager->display('editarticle.tpl');
                }

                if (isset($_GET['manage']) and empty($_GET['manage'])) {
                    $this->pager->assign('articles', $this->getArticles());
                    $this->pager->display('listarticles.tpl');
                }

                if (!empty($_GET['delete'])) {
                    $this->deleteArticle($_GET['delete']);
                    header('Location: ./admin.php?manage');
                }

                if (!empty($_GET['accept'])) {
                    $this->acceptArticle($_GET['accept']);
                    header('Location: ./admin.php?manage');
                }

                if (!empty($_GET['disagree'])) {
                    $this->disagreeArticle($_GET['disagree']);
                    header('Location: ./admin.php?manage');
                }
            } else {
                if (!isset($_POST['login']) or !isset($_POST['password'])) {
                    $this->pager->display('login.tpl');
                }
            }

            if ($_POST) {
                if (isset($_POST['login']) and isset($_POST['password'])) {
                    if(($_POST['login'] === $this->getLoginPassword('login'))
                        and (md5($_POST['password']) === $this->getLoginPassword('password'))) {
                        $_SESSION['allow'] = rand();
                        header("Location: ./admin.php");
                    } else {
                        $this->pager->assign('error',  'Неправильный логин или пароль!');
                        $this->pager->display('login.tpl');
                    }
                }
                if (!empty($_POST['id']) and isset($_POST['public']) and !empty($_POST['title']) 
                    and !empty($_POST['user_name']) and !empty($_POST['text'])) {
                    $this->updateArticle($_POST);
                    header('Location: ./admin.php?manage');
                }
      
            }

        /* If Front-End */
	    } else {

            if (empty($_GET)) {
                $this->pager->assign('articles',  $this->getArticles());
                $this->pager->display('indexcontent.tpl');
            }

            if (isset($_GET['article'])) {
                $this->pager->assign('article',  $this->getArticle($_GET['article']));
                $this->pager->display('article.tpl');
            }

            if ($_POST) {
                if (!empty($_POST['user_name']) and !empty($_POST['title']) and !empty($_POST['text'])) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                	$this->addArticle($_POST);
            	}
            }
        }
    }
}
    

?>

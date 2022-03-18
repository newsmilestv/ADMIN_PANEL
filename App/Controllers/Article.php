<?php 

namespace App\Controllers;

use App\Models\Article as MainArticle;

class Article extends Controller
{
    protected function handle()
    {
        $this->view->article = MainArticle::findById($_GET['id']);
        $this->view->display('article.php');
    }
}
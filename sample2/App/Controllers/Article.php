<?php

namespace App\Controllers;

use App\Models\Article as ModelsArticle;

class Article extends Controller
{
    protected function handle()
    {
        $this->view->article = ModelsArticle::findById($_GET['id']);
        $this->view->display('article.php');
    }
}

<?php 

namespace App\Controllers;

use App\Models\Article;

class Index extends Controller
{
    protected function handle()
    {
        $this->view->articles = Article::findLastArticle(3);
        $this->view->display('index.php');
    }   
}
<?php
namespace App\Controllers;

use App\Models\Article;
//use App\Controllers\Controller;

class Index extends Controller
{
    protected function handle()
    {
       $this->view->articles = Article::findNLastArticles(3);
       $this->view->display(__DIR__ . '/../templates/index.php'); 
    }  
}

// use App\Models\Article;
// use App\View;

// require __DIR__ . '/autoload.php';

// $view = new View;
// $view->articles = Article::findNLastArticles(3);
// $view->display(__DIR__ . '/../templates/admin/index.php');

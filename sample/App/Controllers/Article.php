<?php
namespace App\Controllers;

use App\Models\Article as ArticleModel;


class Article extends Controller
{
  protected function handle()
  {
    $this->view->article = ArticleModel::findById($_GET['id']);
    $this->view->display(__DIR__ . '/../templates/article.php');
    // $this->view->display('article.php');
    //include __DIR__ . '/../templates/index.php';
  }
}

// use App\Models\Article;
// use App\View;

// require __DIR__ . '/../../autoload.php';

// $view = new View;
// $view->article = Article::findById($_GET['id']);
// $view->display(__DIR__ . '/../templates/admin/article.php');
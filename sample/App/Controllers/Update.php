<?php
namespace App\Controllers;

use App\Models\Article;

class Update extends Controller
{
  protected function handle()
  {
    $this->view->article = Article::findById($_GET['id']);
    $this->view->display(__DIR__ . '/../templates/admin/update.php');
  }
}


// use App\View;

// require __DIR__ . '/../../autoload.php';

// $view = new View;
// $view->article = Article::findById($_GET['id']);
// $view->display(__DIR__ . '/../templates/admin/update.php');
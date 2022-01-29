<?php
namespace App\Controllers;

use App\Models\Article;

class Admin extends Controller
{
  protected function handle()
  {
    $this->view->articles = Article::findAll();
    $this->view->display(__DIR__ . '/../templates/admin/index.php');
  }
}

// use App\Models\Article;
// use App\View;


// require __DIR__ . '/../../autoload.php';

//  $view = new View;
//  $view->articles = Article::findAll();
//  $view->display(__DIR__ . '/../templates/admin/index.php');


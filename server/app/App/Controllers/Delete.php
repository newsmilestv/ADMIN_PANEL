<?php
namespace App\Controllers;

use App\Models\Article;

class Delete extends Controller
{
  protected function handle()
  {
    $this->article = Article::findById($_GET['id']);
    $this->article->delete();

    header('Location: /?ctrl=Admin');
  }
}

// require __DIR__ . '/../../autoload.php';

// $article = Article::findById($_GET['id']);
// $article->delete();

// header('Location: /App/Controllers/admin.php');
// die();
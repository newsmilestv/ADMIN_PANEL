<?php
namespace App\Controllers;

use App\Models\Article;
//var_dump($_POST);die;
class Save extends Controller
{
  protected function handle()
  {
    if (isset($_POST['id'])) {
        $this->article = Article::findById($_POST['id']);
    } else {
        $this->article = new Article;
    }
      
    $this->article->title = $_POST['title'];
    $this->article->body = $_POST['body'];
    $this->article->save();

    header('Location: /?ctrl=Admin');
    //die;
  }
}

// require __DIR__ . '/../../autoload.php';

// if (isset($_POST['id'])) {
//     $article = Article::findById($_POST['id']);
// } else {
//     $article = new Article;
// }

// $article->title = $_POST['title'];
// $article->body = $_POST['body'];
// $article->save();

// header('Location: /App/Controllers/admin.php');
// die();
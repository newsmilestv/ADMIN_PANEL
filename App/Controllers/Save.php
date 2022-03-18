<?php 

namespace App\Controllers;

use App\Models\Article;

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
        $this->article->content = $_POST['content'];
        $this->article->author = $_POST['author'];
        $this->article->save();

        header('Location: /?ctrl=Admin');
    }
}
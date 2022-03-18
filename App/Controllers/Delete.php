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
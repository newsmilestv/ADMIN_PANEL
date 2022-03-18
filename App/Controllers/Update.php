<?php 

namespace App\Controllers;

use App\Models\Article;

class Update extends Controller
{
    protected function handle()
    {
        $this->view->article = Article::findById($_GET['id']);
        $this->view->display('admin/update.php');
    }
}
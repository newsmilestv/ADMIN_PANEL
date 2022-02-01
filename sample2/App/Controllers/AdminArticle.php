<?php

namespace App\Controllers;

use App\Models\Article as ModelAricle;

class AdminArticle extends Controller
{
    protected function handle()
    {
        $this->view->article = ModelAricle::findById($_GET['id']);
        $this->view->display('admin/article.php');
    }
}

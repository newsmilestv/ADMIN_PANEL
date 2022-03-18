<?php 

namespace App\Controllers;

use App\Models\Article;

class Admin extends Controller
{
    protected function handle()
    {
        $this->view->articles = Article::findAll();
        $this->view->display('admin/index.php');
    }   
}
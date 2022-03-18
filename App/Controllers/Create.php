<?php 

namespace App\Controllers;

class Create extends Controller
{
    protected function handle()
    {
        $this->view->display('admin/create.php');
    }
}
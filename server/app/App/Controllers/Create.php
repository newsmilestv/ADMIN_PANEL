<?php
namespace App\Controllers;

class Create extends Controller
{
  protected function handle()
  {
    $this->view->display(__DIR__ . '/../templates/admin/create.php');
  }
}

// use App\View;

// require __DIR__ . '/../../autoload.php';

// $view = new View;
// $view->display(__DIR__ . '/../templates/admin/create.php');
<?php 

require __DIR__ . '/autoload.php';


try {
    $ctrl = $_GET['ctrl'] ?? 'Index';
    $class = '\App\Controllers\\' . $ctrl;
    $ctrl = new $ctrl;
    $ctrl();
} catch (\Throwable $th) {
    //throw $th;
}
<?php
require __DIR__ . '/autoload.php';

use App\Controllers\Index;
use App\Exceptions\DbConnectEx;
use App\Exceptions\SqlException;

try {
    $ctrl = $_GET['ctrl'] ?? 'Index';
    $class = '\App\Controllers\\' . $ctrl;
    $ctrl = new $class;
    $ctrl();
} catch (SqlException $ex) {
    //echo $ex->getMessage();
    $ctrl = new \App\Controllers\SqlError($ex);
    $ctrl();
} catch (DbConnectEx $ex) {
   //echo 'DB CONNECT ERROR!!!' . $ex->getMessage();
   $ctrl = new \App\Controllers\DbError($ex);
   $ctrl();
} catch (\Exception $ex) {
    echo 'Неизвестная ошибка!!!' . $ex->getMessage();
} 



// use App\Models\Article;
// use App\View;

// require __DIR__ . '/autoload.php';

// $view = new View;
// $view->articles = Article::findNLastArticles(3);
// $view->display(__DIR__ . '/App/templates/index.php');
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
    $ctrl = new \App\Controllers\SqlError($ex);
    $crtl();
} catch (DbConnectEx $ex) {
    $ctrl = new \App\Controllers\DbError($ex);
    $ctrl();
} catch (\Exception $ex) {
    echo 'Неизвестная ошибка!!!' . $ex->getMessage();
}
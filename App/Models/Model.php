<?php 

namespace App\Models;

use App\Resources\Db;

abstract class Model
{
    const TABLE = '';
    public $id;

    /**
     * Функция findAll() возвращает все записи из таблицы
     * @return array
     */

     public static function findAll() : array
     {
        $db = Db::instance();
        $class = static::class;
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($class, $sql, []);
     }
}
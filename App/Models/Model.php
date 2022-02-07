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

     /**
      * Функция findById($id) возвращает одну запись из таблицы с заданным id
      * @param $id integer
      * @return bool | object
      */
      public static function findById($id) : int
      {
         $db = Db::instance();
         $class = static::class;
         $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
         $data = [':id' => $id];
         $value = $db->query($class, $sql, $data);
         return $value ? $value[0] : null;
      }
}
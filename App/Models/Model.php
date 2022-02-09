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
      /**
       * Функция проверяет есть ли значение в переменной $id
       */
      public function isNew() : bool
      {
         return empty($this->id);
      }
      /**
       * Функция вставляет новую запись
       */
      public function insert()
      {
         if (!$this->isNew()) {
            return;
         }

         $columns = [];
         $values = [];

         foreach ($this as $key => $value) {
            if ('id' == $key) {
               continue;
            }

            $columns[] = $key;
            $values[':' . $key] = $value;
         }

         $sql = 'INSERT INTO ' . static::TABLE . '
            (' . implode(',', $columns) . ')
            VALUES
            (' . implode(',', array_keys($values)) . ')
         ';

         $db = Db::instance();
         $db->execute($sql, $values);
         $this->id = $db->getLastId();
      }
}
<?php

namespace App\Models;


use App\Db;

abstract class Model
{
    protected static $table = '';

    public $id;

    /**
     * Функция возвращает все записи из таблицы
     *
     * @return array
     */
    public static function findAll()
    {
        $db = new Db;
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, [], static::class);
    }

    /**
     * Функция возвращает одну запись из таблицы с заданным id
     *
     * @param $id integer
     * @return bool|object
     */
    public static function findById(int $id)
    {
        $db = new Db;
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $params = [':id' => $id];
        $res = $db->query($sql, $params, static::class);

        if (empty($res)) {
            return false;
        } else {
            return $res[0];
        }
    }

    /**
     * Функция вставляет новую запись в таблицу
     */
    public function insert()
    {
        $fields = get_object_vars($this);
        $sets = [];
        $values = [];
        $params = [];

        foreach ($fields as $key => $value) {
            if ('id' === $key) {
                continue;
            }
            $sets[] = $key;
            $values[] = ':' . $key;
            $params[':' . $key] = $value;
        }

        $sql = 'INSERT INTO ' . static::$table . ' (' . implode(', ', $sets) . ') 
                VALUES (' . implode(', ', $values) . ')';

        $db = new Db;
        $db->execute($sql, $params);
        $this->id = $db->getLastId();
    }

    /**
     * Функция обновляет существующую запись в таблице
     */
    public function update()
    {
        $fields = get_object_vars($this);
        $sets = [];
        $params = [];

        foreach ($fields as $key => $value) {
            $params[':' . $key] = $value;
            if ('id' === $key) {
                continue;
            }
            $sets[] = $key . '=:' . $key;
        }

        $sql = 'UPDATE ' . static::$table . ' 
                SET ' . implode(', ', $sets) . ' 
                WHERE id=:id';

        $db = new Db;
        $db->execute($sql, $params);
    }

    /**
     * Фукция сохранят запись в таблицу
     */
    public function save()
    {
        if (isset($this->id)) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    /**
     * Фукция удаляет запись из таблицы
     */
    public function delete()
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $params = [':id' => $this->id];
        $db = new Db;
        $db->execute($sql, $params);
    }
}
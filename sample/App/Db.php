<?php

namespace App;

use App\Exceptions\DbConnectEx;
use App\Exceptions\SqlException;

class Db
{
    protected $dbh;

    public function __construct()
    {
        try {
            $conf = Config::getInstance()->data['db'];
            $dsn = 'mysql:host=' . $conf['host'] . ';dbname=' . $conf['dbname'];
            $this->dbh = new \PDO($dsn, $conf['login'], $conf['password']);
        } catch (\Exception $ex) {
            throw new DbConnectEx('Ошибка подключения к БД!!!', 2);
        }
        
    }

    public function query($sql, $params = [], $class = '')
    {
        
    // try {
    //   $sth = $this->dbh->prepare($sql);
    //   $sth->execute($params);
    //   return $res = $sth->fetchAll(\PDO::FETCH_CLASS, $class);  
    // } catch (\Exception $ex) {
    //   throw new SqlException($sql, "Ошибка SQL запроса!!!", 1);
    // }

        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        if (!$res) {
            throw new SqlException($sql, 'Ошибка SQL запроса!!!', 1);
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }

        // if (empty($class)) {
        //     return $sth->fetchAll(\PDO::FETCH_ASSOC);
        // } else {
        //     return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        // }
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}